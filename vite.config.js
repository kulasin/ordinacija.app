import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import copy from 'rollup-plugin-copy';
import { resolve } from 'path';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/laravel-user-management.js'],
      refresh: true
    }),
    copy({
      targets: [
        { src: 'node_modules/flag-icons/flags/1x1/*', dest: 'public/assets/vendor/fonts/flags/1x1' },
        { src: 'node_modules/flag-icons/flags/4x3/*', dest: 'public/assets/vendor/fonts/flags/4x3' },
        {
          src: 'node_modules/@fortawesome/fontawesome-free/webfonts/*',
          dest: 'public/assets/vendor/fonts/fontawesome'
        },
        { src: 'node_modules/katex/dist/fonts/*', dest: 'public/assets/vendor/libs/quill/fonts' }
      ],
      hook: 'writeBundle'
    })
  ],
  build: {
    rollupOptions: {
      input: {
        main: resolve(__dirname, 'resources/js/app.js'),
        userManagement: resolve(__dirname, 'resources/js/laravel-user-management.js')
      },
      output: {
        entryFileNames: 'assets/[name].js',
        chunkFileNames: 'assets/[name].js',
        assetFileNames: 'assets/[name].[ext]'
      }
    }
  },
  server: {
    proxy: {
      '/': 'http://127.0.0.1:8000'
    }
  }
});
