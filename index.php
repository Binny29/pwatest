<!doctype html>
<head>
<link rel="manifest" href="manifest.json" />
<meta name="mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="application-name" content="PWA Workshop" />
<meta name="apple-mobile-web-app-title" content="PWA Workshop" />
<meta name="msapplication-starturl" content="index.php" />
<meta
  name="viewport"
  content="width=device-width, initial-scale=1, shrink-to-fit=no"
/>
</head>
<body>
<h1>PWA app test</h1>
</body>
<script src="https://me.mauliksompura.in/pwatest/jquery-3.2.1.min.js"></script>
</html>

<script type="text/javascript">

url="https://me.mauliksompura.in/pwatest";
if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register(url+'sw.js');
}

</script>

