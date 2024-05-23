<?php
   include("TypingDNAVerifyClient.php");
   include("credentials.php");

   $typingDNAVerifyClient = new TypingDNAVerifyClient($client_id, $application_id, $secret);

   $typingDNADataAttributes = $typingDNAVerifyClient->getDataAttributes([
      "phoneNumber" => "+14067478083",
      "language" => "en",
      "mode" => "standard"
   ]);
?>

<html>
   <script src="https://cdn.typingdna.com/verify/typingdna-verify.js"></script>
   <script>
       function callbackFn(payload)
       {
           window.location.href = "verify_otp.php?otp=".concat(payload["otp"]);
       }
   </script>
   <head>
   <link rel="icon" href="static/img/favicon.png">
        <title>Behaviour Fusion</title>
       <!-- Bootstrap core CSS -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="static/css/signin.css" rel="stylesheet">
   </head>
   <body>
       
       <form class="form-signin">
      <img class="mb-4" src="static/img/logo.png" alt="" width="280" height="280">
      <h1 class="h3 mb-3 font-weight-normal">Behaviour Fusion!</h1>
      <button
      class="typingdna-verify mb-3 btn btn-lg btn-primary btn-block" type="button"
           data-typingdna-client-id=<?php echo $typingDNADataAttributes["clientId"]?>
           data-typingdna-application-id=<?php echo $typingDNADataAttributes["applicationId"] ?> 
           data-typingdna-payload=<?php echo $typingDNADataAttributes["payload"]?> 
           data-typingdna-callback-fn= "callbackFn"
           >Authenticate
       </button>
       <button type="button" class="mb-3 btn btn-lg btn-primary btn-block" onclick="window.location.href = 'https://verify-demo.typingdna.com/?appId=83a370ad646b7410577bccf7334dcff1&demoSource=Gated'"> Register </button>
      <button type="button" class="mb-3 btn btn-lg btn-primary btn-block" onclick="window.location.href = '/treinar'">Train</button>
      <button type="button" class="mb-3 btn btn-lg btn-primary btn-block" onclick="window.location.href = '/best_params'">Get better parameters</button>
      <p class="mt-5 mb-3 text-muted">Vipul Arora, 201151</p>
      <p class="mt-2 mb-3 text-muted">Aastha Verma, 201432</p>
    </form>
   </body>
</html>