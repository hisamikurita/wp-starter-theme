import path from "path";
import { defineConfig } from "vite"; 

const theme = '/mytheme/assets'

export default defineConfig({
  root: "",
  base: process.env.NODE_ENV === 'development' ? './' : '/dist/',
  build: {
    outDir: path.resolve( __dirname, './dist' ),
    emptyOutDir: true,
    target: 'es2018',
    rollupOptions: {
			input: {
				app: path.resolve(__dirname + `${theme}/app.js` ),
			},
			output: {
				entryFileNames: `assets/js/[name].js`,
				chunkFileNames: `assets/js/[name].js`,
        assetFileNames: ( { name } ) => {
					if ( /\.( gif|jpeg|jpg|png|svg|webp| )$/.test( name ?? '' ) ) {
						return 'assets/images/[name].[ext]';
					}
					if ( /\.css$/.test( name ?? '' ) ) {
						return 'assets/css/[name].[ext]';
					}
					if ( /\.js$/.test( name ?? '' ) ) {
						return 'assets/js/[name].[ext]';
					}
					return 'assets/[name].[ext]';
				},
			},
		},
  },
  server: {
		cors: true,
		strictPort: true,
		port: 3000,
		https: false,
		hmr: {
			host: 'localhost',
		},
	},
})