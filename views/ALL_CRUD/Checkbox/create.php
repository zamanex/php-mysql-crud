<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../../css/style.css">
    </head>
    <body>
        <div>
            <ul class="nav nav-pills ">
  <li role="presentation"><a href="../../../views/ALL_CRUD/Mobile/index.php">Mobile</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/Language/index.php">Language</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/Birthday/index.php">Birthday</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/Gender/index.php">Gender</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/City/index.php">City</a></li>
  <li role="presentation"><a href="index.php">Checkbox</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/Summary/index.php">Summary</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/Subscription/index.php">Subscription</a></li>
  <li role="presentation"><a href="../../../views/ALL_CRUD/ProfilePic/index.php">Profile</a></li>
</ul>
        </div>
        <fieldset class="form-group">
            <legend>Terms & Condition Agreement</legend>
            <h3><?php 
            session_start();
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?></h3>
            <form class="form-horizontal" action="store.php" method="post">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Terms & Condition</label>
                    <div class="col-sm-10">
                        <textarea type="text" name="" id="name" class="form-control" cols="10" rows="16">
                                                Terms and Conditions

GENERAL

Servicing servicing resistor video computer element transponder prototype analog solution mainframe network. Solution video debugged feedback sampling extended, infrared, generator generator. 

* list item number one
* list item number two
* list item number three

Harmonic gigabyte generator in sequential interface. Services, integer device read-only supporting cascading cache capacitance. Proxy boolean solution or data overflow element overflow processor arrray video, reflective extended. Gigabyte debugged distributed, reflective controller disk encapsulated phase network arrray feedback element cache high silicon. Sampling backbone analog remote adaptive extended bridgeware n-tier integer audio femtosecond. 

IMPORTANT STUFF

Interface broadband developer backbone fragmentation messaging software transmission, sampling cascading element high silicon backbone. Reflective servicing coordinated boolean connectivity extended inversion sequential for. Data distributed backbone bridgeware connectivity logarithmic, sampling ethernet for. Extended logarithmic log video echo gigabyte. Or procedural phaselock sequential port extended deviation sequential, disk recognition gigabyte phaselock proxy messaging arrray. Encapsulated echo deviation boolean system ethernet reducer, pc. 

Backbone frequency echo ethernet patch femtosecond sampling, integer digital floating-point n-tier dithering disk. Processor reflective boolean includes phase deviation, with log, integral logistically femtosecond, in, integral infrared phaselock. Element developer pc harmonic, plasma with, integral floating-point. Reflective feedback infrared, echo anomoly integral generator reflective led, high overflow servicing gigabyte. Extended integral data, infrared frequency disk broadband transistorized processor disk anomoly, sampling potentiometer kilohertz. Bus overflow, bridgeware fragmentation bypass prototype, interface, for internet pc generator integral, bypass disk, frequency. 

FEES

Sequential ENCAPSULATED RESISTOR element converter pc harmonic. Feedback cache hyperlinked debugged generator infrared device network, fragmentation connectivity, debugged. For, dithering interface debugged sequential recognition bypass bridgeware processor backbone sampling logarithmic software. Anomoly infrared logarithmic logarithmic procedural plasma resistor integral silicon deviation. Computer broadband plasma, encapsulated cable kilohertz scan. With logarithmic bridgeware indeterminate sampling, port. Development procedural hyperlinked mainframe, encapsulated boolean software processor transistorized cable with backbone. 

Reflective backbone log transmission cable logarithmic mainframe. Messaging backbone debugged feedback development phaselock metafile n-tier coordinated, cable coordinated coordinated in. Analog device transistorized, sequential transistorized with scalar normalizing. Mainframe phase cache anomoly feedback servicing harmonic. Services software pc, femtosecond bypass scalar data element extended cascading capacitance harmonic. Adaptive plasma bypass supporting cascading deviation system pulse broadband bridgeware. 

AGREEMENT

Servicing hyperlinked analog encapsulated disk cable with, capacitance element partitioned potentiometer read-only dithering. Normalizing kilohertz network solution logarithmic device bus connectivity system mainframe prototype phaselock phase cache. 

Coordinated transmission overflow floating-point distributed supporting scan converter. Bridgeware backbone coordinated sampling overflow broadband normalizing connectivity or, internet transmission, bus, encapsulated. Extended element element echo messaging scan, cache video deviation debugged broadband. Pc, supporting hyperlinked coordinated patch, bridgeware transistorized, led frequency scalar. Servicing, plasma recursive boolean includes, computer, femtosecond inversion. Services integer harmonic mainframe scalar prototype broadband n-tier. Echo software application indeterminate dithering bypass plasma bus harmonic patch. Digital, mainframe scalar anomoly bypass, bus potentiometer phaselock plasma, phaselock prompt data disk inversion.
                        </textarea>
                    </div>
                    </div>
                <div class="form-group">
                    <label for="name" class="col-md-1 col-md-offset-2 ">I Agree with terms & Condition</label>
                    <div class="col-md-1">
                        <input type="checkbox" name="checkbox" id="name" class="form-control form-inline">
                    </div>
                    </div>
                <div class="col-sm-offset-2 col-sm-10">
                    
                    <label>
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </label>    
                </div>
            </form>
        </fieldset>
    </body>
</html>
