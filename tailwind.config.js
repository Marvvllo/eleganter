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
			},
			fontFamily: {
				display: ['"Raleway"', "sans-serif"],
				sans: ['"Open Sans"', "sans-serif"],
			},
			gridTemplateColumns: {
				// Grid for hero section
				'hero': '1.25fr 1fr',
			}
		},
	},
};
