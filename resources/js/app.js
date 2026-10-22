/**
 * Kopi Senja — front-end behaviour.
 */

const initNavigation = () => {
  const toggle = document.querySelector('[data-nav-toggle]');
  const panel = document.querySelector('[data-nav-panel]');

  if (!toggle || !panel) {
    return;
  }

  const setOpen = (open) => {
    toggle.setAttribute('aria-expanded', String(open));
    panel.toggleAttribute('data-open', open);
  };

  toggle.addEventListener('click', () => {
    setOpen(toggle.getAttribute('aria-expanded') !== 'true');
  });

  panel.addEventListener('click', (event) => {
    if (event.target.closest('a')) {
      setOpen(false);
    }
  });

  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape' && toggle.getAttribute('aria-expanded') === 'true') {
      setOpen(false);
      toggle.focus();
    }
  });
};

initNavigation();
