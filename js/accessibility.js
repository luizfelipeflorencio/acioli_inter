/**
 * Accessibility System for Website
 * Provides visual accessibility features:
 * - Contrast modes (normal, high contrast, dark mode)
 * - Font size adjustment
 * - Color tone adjustment (warm, cool, neutral)
 */

// Configuration
const ACCESSIBILITY_CONFIG = {
  CONTRAST_MODES: ['normal', 'high-contrast', 'dark'],
  FONT_SIZES: ['text-sm', 'text-base', 'text-lg', 'text-xl', 'text-2xl'],
  COLOR_TONES: ['warm', 'cool', 'neutral']
};

// Default settings
const DEFAULT_SETTINGS = {
  contrast: 'normal',
  fontSize: 'text-base',
  colorTone: 'neutral'
};

class AccessibilityManager {
  constructor() {
    this.settings = this.loadSettings();
    this.init();
  }

  /**
   * Initialize the accessibility system
   */
  init() {
    this.applySettings();
    this.setupEventListeners();
    this.createAccessibilityPanel();
  }

  /**
   * Load settings from localStorage or use defaults
   */
  loadSettings() {
    try {
      const savedSettings = localStorage.getItem('accessibilitySettings');
      return savedSettings ? JSON.parse(savedSettings) : { ...DEFAULT_SETTINGS };
    } catch (e) {
      console.error('Error loading accessibility settings:', e);
      return { ...DEFAULT_SETTINGS };
    }
  }

  /**
   * Save settings to localStorage
   */
  saveSettings() {
    try {
      localStorage.setItem('accessibilitySettings', JSON.stringify(this.settings));
    } catch (e) {
      console.error('Error saving accessibility settings:', e);
    }
  }

  /**
   * Apply current settings to the page
   */
  applySettings() {
    // Apply contrast mode
    document.body.classList.remove(...ACCESSIBILITY_CONFIG.CONTRAST_MODES.map(mode => `contrast-${mode}`));
    document.body.classList.add(`contrast-${this.settings.contrast}`);

    // Apply font size
    document.body.classList.remove(...ACCESSIBILITY_CONFIG.FONT_SIZES);
    document.body.classList.add(this.settings.fontSize);

    // Apply color tone
    document.body.classList.remove(...ACCESSIBILITY_CONFIG.COLOR_TONES.map(tone => `tone-${tone}`));
    document.body.classList.add(`tone-${this.settings.colorTone}`);
  }

  /**
   * Set up event listeners for accessibility controls
   */
  setupEventListeners() {
    // Handle clicks on accessibility controls
    document.addEventListener('click', (e) => {
      // Handle contrast mode buttons
      if (e.target.matches('[data-contrast]')) {
        this.setContrastMode(e.target.dataset.contrast);
        return;
      }
      
      // Handle font size buttons
      if (e.target.matches('[data-font-size]')) {
        this.setFontSize(e.target.dataset.fontSize);
        return;
      }
      
      // Handle color tone buttons
      if (e.target.matches('[data-color-tone]')) {
        this.setColorTone(e.target.dataset.colorTone);
        return;
      }
      
      // Toggle accessibility panel
      if (e.target.matches('#accessibility-toggle') || e.target.closest('#accessibility-toggle')) {
        this.togglePanel();
        return;
      }
      
      // Close panel when clicking outside
      const panel = document.getElementById('accessibility-panel');
      if (panel && !panel.classList.contains('hidden')) {
        if (!e.target.closest('#accessibility-panel') && !e.target.matches('#accessibility-toggle')) {
          this.closePanel();
        }
      }
    });
  }

  /**
   * Create the accessibility panel HTML
   */
  createAccessibilityPanel() {
    // Check if panel already exists
    if (document.getElementById('accessibility-panel')) return;

    const panel = document.createElement('div');
    panel.id = 'accessibility-panel';
    panel.className = 'accessibility-panel hidden';
    panel.innerHTML = `
      <div class="accessibility-panel-header">
        <h3>Configurações de Acessibilidade</h3>
        <button class="accessibility-close-btn" aria-label="Fechar painel de acessibilidade">&times;</button>
      </div>
      
      <div class="accessibility-panel-content">
        <!-- Contrast Mode -->
        <div class="accessibility-section">
          <h4>Modo de Contraste</h4>
          <div class="accessibility-options">
            <button class="accessibility-btn" data-contrast="normal">Normal</button>
            <button class="accessibility-btn" data-contrast="high-contrast">Alto Contraste</button>
            <button class="accessibility-btn" data-contrast="dark">Modo Escuro</button>
          </div>
        </div>
        
        <!-- Font Size -->
        <div class="accessibility-section">
          <h4>Tamanho da Fonte</h4>
          <div class="accessibility-options">
            <button class="accessibility-btn" data-font-size="text-sm">A-</button>
            <button class="accessibility-btn" data-font-size="text-base">A</button>
            <button class="accessibility-btn" data-font-size="text-lg">A+</button>
            <button class="accessibility-btn" data-font-size="text-xl">A++</button>
            <button class="accessibility-btn" data-font-size="text-2xl">A+++</button>
          </div>
        </div>
        
        <!-- Color Tone -->
        <div class="accessibility-section">
          <h4>Tom de Cores</h4>
          <div class="accessibility-options">
            <button class="accessibility-btn" data-color-tone="warm">Quente</button>
            <button class="accessibility-btn" data-color-tone="cool">Frio</button>
            <button class="accessibility-btn" data-color-tone="neutral">Neutro</button>
          </div>
        </div>
      </div>
    `;
    
    document.body.appendChild(panel);
    
    // Add close button functionality
    panel.querySelector('.accessibility-close-btn').addEventListener('click', () => {
      this.closePanel();
    });
  }

  /**
   * Set contrast mode
   */
  setContrastMode(mode) {
    if (ACCESSIBILITY_CONFIG.CONTRAST_MODES.includes(mode)) {
      this.settings.contrast = mode;
      this.saveSettings();
      this.applySettings();
    }
  }

  /**
   * Set font size
   */
  setFontSize(size) {
    if (ACCESSIBILITY_CONFIG.FONT_SIZES.includes(size)) {
      this.settings.fontSize = size;
      this.saveSettings();
      this.applySettings();
    }
  }

  /**
   * Set color tone
   */
  setColorTone(tone) {
    if (ACCESSIBILITY_CONFIG.COLOR_TONES.includes(tone)) {
      this.settings.colorTone = tone;
      this.saveSettings();
      this.applySettings();
    }
  }

  /**
   * Toggle visibility of the accessibility panel
   */
  togglePanel() {
    const panel = document.getElementById('accessibility-panel');
    panel.classList.toggle('hidden');
  }

  /**
   * Close the accessibility panel
   */
  closePanel() {
    const panel = document.getElementById('accessibility-panel');
    panel.classList.add('hidden');
  }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
  window.accessibilityManager = new AccessibilityManager();
});

// Export for potential use in other modules
if (typeof module !== 'undefined' && module.exports) {
  module.exports = AccessibilityManager;
}