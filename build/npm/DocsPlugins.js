'use strict'

const Plugins = [
  // AdminLTE Dist
  {
    from: 'dist/css/',
    to: 'docs../site_yonetim/site_yonetim////css/'
  },
  {
    from: 'dist/js/',
    to: 'docs../site_yonetim/site_yonetim////js/'
  },
  // jQuery
  {
    from: 'node_modules/jquery/dist/',
    to: 'docs../site_yonetim/site_yonetim////plugins/jquery/'
  },
  // Popper
  {
    from: 'node_modules/popper.js/dist/',
    to: 'docs../site_yonetim/site_yonetim////plugins/popper/'
  },
  // Bootstrap
  {
    from: 'node_modules/bootstrap/dist/js/',
    to: 'docs../site_yonetim/site_yonetim////plugins/bootstrap/js/'
  },
  // Font Awesome
  {
    from: 'node_modules/@fortawesome/fontawesome-free/css/',
    to: 'docs../site_yonetim/site_yonetim////plugins/fontawesome-free/css/'
  },
  {
    from: 'node_modules/@fortawesome/fontawesome-free/webfonts/',
    to: 'docs../site_yonetim/site_yonetim////plugins/fontawesome-free/webfonts/'
  },
  // overlayScrollbars
  {
    from: 'node_modules/overlayscrollbars/js/',
    to: 'docs../site_yonetim/site_yonetim////plugins/overlayScrollbars/js/'
  },
  {
    from: 'node_modules/overlayscrollbars/css/',
    to: 'docs../site_yonetim/site_yonetim////plugins/overlayScrollbars/css/'
  }
]

module.exports = Plugins
