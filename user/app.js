new Vue({

	el: "#root",
	data: {
		test: "lol"
	},
	methods: {
		doThis: function () {
			console.log(this.test);
			var url = 'http://appedine.digitalfolks.sg/api/v1/menus';
			this.$http({url: url, method: 'GET'})
				.then(function (response) {
					this.test = response.data.data;
				}, function (response) {
					console.log('error');
					console.log(response);
				})
		}
	}

})