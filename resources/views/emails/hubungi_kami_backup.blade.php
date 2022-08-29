<!DOCTYPE html>
<html>
<head>

    <title>sindikat.co.id</title>

</head>

<body>

    <h1>Dear {{$data->name ?? ''}}, </h1>
	<p>
		<h2>Terimakasih telah menghubungi kami</h2>
		<h3>Kami akan segera menghubungi anda</h3>
	</p>	
    <p>	{{ $data->comment ?? '' }}</p>
	<p>
		<h3>Salam,</h3>
		<h3>sindikat.co.id</h3>
	</p>


</body>

</html>