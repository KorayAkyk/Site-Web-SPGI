
<!DOCTYPE html>
<html lang="fr">
<head>
<h1>Bonjour et bienvenue sur le site de Super Vision ^^ de Gardette Industrie</h1>

	<meta charset="UTF-8">

	<title>Custom Checkboxes in full CSS3 - Flat UI effect</title>

	<meta name="viewport" content="width=device-width">
	<meta name="description" content="Custom Checkboxes in full CSS3 - Flat UI effect">

	<style type="text/css">
	body {
		font-family: "Open Sans", "Segoe WP", "Segoe UI", Helvetica, Arial, sans-serif;
		text-align: center;
		color: #34495E;
  		background: #FCFDFD;
	}

	a[href^="https://www.creativejuiz"] {
		color: #34495E;
		text-decoration: underline;
	}

	h2 {
		margin-top: .5em;
		margin-bottom: 3em;
		color: #39D2B4;
		font-weight: normal;
	}

	form {
		width: 132px;
		margin: 0 auto 55px;
		text-align: left;
	}

	div p:first-child {
		font-weight: bold;
		font-size: 1.2em;
	}

	p,
	p a { 
		color: #aaa;
		text-decoration: none;
	}

	p a:hover,
	p a:focus {
		text-decoration: underline;
	}

	p + p {
		margin-top: 3em;
	}

	form p {
		margin: 25px 0;
		color: #34495E;
	}

	.detail {
		position: absolute;
		text-align: right;
		right: 5px;
		bottom: 5px;
		width: 50%;
	}

	a[href*="intent"] {
		display:inline-block;
		margin-top: 0.4em;
		padding-left: 25px;
		background: url(bird.png) 0 4px no-repeat;
	}

	a[href^="https://twitter.com"] {
		color: #1da1f2;
	}


	/*
		Demo CSS code
	*/
	
	[type="checkbox"]:not(:checked),
	[type="checkbox"]:checked {
		position: absolute;
		left: -9999px;
	}
	[type="checkbox"]:not(:checked) + label,
	[type="checkbox"]:checked + label {
		position: relative;
		padding-left: 75px;
		cursor: pointer;
	}
	[type="checkbox"]:not(:checked) + label:before,
	[type="checkbox"]:checked + label:before,
	[type="checkbox"]:not(:checked) + label:after,
	[type="checkbox"]:checked + label:after {
		content: '';
		position: absolute;
	}
	[type="checkbox"]:not(:checked) + label:before,
	[type="checkbox"]:checked + label:before {
		left:0; top: -3px;
		width: 65px; height: 30px;
		background: #DDDDDD;
		border-radius: 15px;
		-webkit-transition: background-color .2s;
		-moz-transition: background-color .2s;
		-ms-transition: background-color .2s;
		transition: background-color .2s;
	}
	[type="checkbox"]:not(:checked) + label:after,
	[type="checkbox"]:checked + label:after {
		width: 20px; height: 20px;
		-webkit-transition: all .2s;
		-moz-transition: all .2s;
		-ms-transition: all .2s;
		transition: all .2s;
		border-radius: 50%;
		background: #7F8C9A;
		top: 2px; left: 5px;
	}

	/* on checked */
	[type="checkbox"]:checked + label:before {
		background:#34495E; 
	}
	[type="checkbox"]:checked + label:after {
		background: #39D2B4;
		top: 2px; left: 40px;
	}

	[type="checkbox"]:checked + label .ui,
	[type="checkbox"]:not(:checked) + label .ui:before,
	[type="checkbox"]:checked + label .ui:after {
		position: absolute;
		left: 6px;
		width: 65px;
		border-radius: 15px;
		font-size: 14px;
		font-weight: bold;
		line-height: 22px;
		-webkit-transition: all .2s;
		-moz-transition: all .2s;
		-ms-transition: all .2s;
		transition: all .2s;
	}
	[type="checkbox"]:not(:checked) + label .ui:before {
		content: "no";
		left: 32px
	}
	[type="checkbox"]:checked + label .ui:after {
		content: "yes";
		color: #39D2B4;
	}
	[type="checkbox"]:focus + label:before {
		border: 1px dashed #777;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		-ms-box-sizing: border-box;
		box-sizing: border-box;
		margin-top: -1px;
	}

	</style>

</head>
<body>
<form action="#">
	<div>
		<p id="label">Choix pc :</p>
	 	<p>
	 		<input type="checkbox" id="test1" />
	 		<label for="test1" aria-describedby="label"><span class="ui"></span>Cibler un pc</label>
	 	</p>
		<p>
			<input type="checkbox" id="test2" />
			<label for="test2" aria-describedby="label"><span class="ui"></span>Séléctionner plusieurs pc</label>
		</p>
		<p>
			<input type="checkbox" id="test3" />
			<label for="test3" aria-describedby="label"><span class="ui"></span>Tout les pcs</label>
		</p>
	</div>
</form>






	<!-- Don't copy below -->
	<script type="text/javascript">
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-8397602-3', 'auto');
		ga('send', 'pageview');
	</script>
</body>
</html>