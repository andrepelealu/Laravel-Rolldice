<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #4 : Passing Data Controller Ke View Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h1>Tutorial Laravel</h1>
	<p>Nama : {{$nama}}</p>
    @foreach($matkul as $m)
    <li>{{$m}}</li>
    @endforeach
    <p>{{$budi}}</p>
</body>
</html>