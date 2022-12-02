module.exports = {
	content: ["./application/**/*.{html,js,php}"],
	theme: {
		extend: {
			colors: {
				transparent: "transparent",
				current: "currentColor",
				primary: "#355DB7",
				secondary: "#799AE3",
				accent: "#A2B3DD",
				dark: "#1D201F",
			},
			fontFamily: {
				display: ['"Raleway"', "sans-serif"],
				sans: ['"Open Sans"', "sans-serif"],
			},
			gridTemplateColumns: {
				// Grid for hero section
				'hero': '1.25fr 1fr',
				'about': '1fr 2fr',
			},
			transitionProperty: {
				'width': 'width'
			},
		},
	},
};
