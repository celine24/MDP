<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Roadweb</title>
</head>
<body>
<div style="width:100%;height:auto;font-size:14px;">
    <div style="display:inline-block;vertical-align:top;">
        <img src="http://i.imgur.com/ssA3CO6.png" alt="logo roadweb" style="width:100%;margin:20px 0;" />

    </div>
    <div style="display:inline-block;vertical-align:top;margin:30px 20px 0 20px;font-size:18px;">
        <p><span style="font-weight:bold;font-size:22px;">Bonjour Pascale,</span> <br />
            Vous avez reçu un message de <span style="color:#2f5530;font-size:20px;font-weight:bold;">{{ $firstname .' '. $lastname }}</span> :
        </p>
    </div>
    <div style="margin:0 20px 20px 20px;height:1px;background-color:#96ba48;"></div>
    <p style="margin-left:20px;"><span style="color:#2f5530;font-weight:bold;">Objet du Message :</span> {{ $object }}</p>
    <p style="margin-left:20px;"><span style="color:#2f5530;font-weight:bold;">Corps du Message :</span></p>
    <p style="margin:20px;">{{ $bodyMessage }}</p>
</div>

</body>
</html>