<html>
<head>
    <title>Doxtal</title>
    <!-- Sources -->
    <script src="https://www.gstatic.com/firebasejs/3.4.0/firebase.js"></script>
    <script src="resources/js/jquery.js"></script>
    <!--     <script src="resources/js/diag.js"></script>
     --><datalist id="symptoms">
        <option value="Abdominal pain">
        <option value="Back pain">
        <option value="Chest pain">
        <option value="Otalgia">
        <option value="Headache">
        <option value="Chronic pelvic pain">
        <option value="Toothache">
        <option value="Vaginal pain">
        <option value="Rectal pain">
        <option value="Dermatomal pain">
        <option value="Chills">
        <option value="Fever">
        <option value="Paresthesia">
        <option value="Light-headed">
        <option value="Dizzy">
        <option value="Dry mouth">
        <option value="Nausea">
        <option value="Sick">
        <option value="Short of breath">
        <option value="Sleepy">
        <option value="Fatigue">
        <option value="Sweaty">
        <option value="Thirsty">
        <option value="Tired">
        <option value="Weak">
        <option value="Hearing difficulty">
        <option value="Urine issues">
        <option value="Blurred vision">
        <option value="Double vision">
        <option value="Insomnia">
        <option value="Difficulty of smell">
        <option value="Excess sweat">
        <option value="Speach impedament">
        <option value="Swallow normally">
        <option value="Balance">
        <option value="Difficulty writing">
        <option value="Pyrexia">
        <option value="Loss of appetite">
        <option value="Weight gain">
        <option value="Muscle weakness">
        <option value="Brusing">
        <option value="Epistaxis">
        <option value="Tremor">
        <option value="Muscle cramps">
        <option value="Convulsions">
        <option value="Tinnitus">
        <option value="Vertigo">
        <option value="Passing out/Faintng (syncope)">
        <option value="Hypothemia">
        <option value="Hyperthemia">
        <option value="Bleeding">
        <option value="Discharge">
        <option value="Swelling">
        <option value="Deformity">
        <option value="Depression">
        <option value="Psychological symptom">
        <option value="Paralysis">
        <option value="Hallucination">
        <option value="Confusion">
        <option value="Paranoia">
        <option value="Anxiety">
        <option value="Anorexia">
        <option value="Bloating">
        <option value="Belching">
        <option value="Constipation">
        <option value="Diarrhea">
        <option value="Vomiting">
        <option value="Dysphagia">
        <option value="Dyspepsia">
        <option value="Vomiting of blood(haematemesis)">
        <option value="Painful swallowing (odynophagia)">
        <option value="Difficulty walking (claudication)">
        <option value="Irregular heartbeat (palpitation)">
        <option value="Abnormal heart rate">
        <option value="Cough">
        <option value="Sneeze">
        <option value="Runny nose">
        <option value="Blister">
        <option value="Rash">
        <option value="Itching">
        <option value="Abrasion">
        <option value="Laceration">
        <option value="Wheezing">
        <option value="Infertillity">
    </datalist>
    <script src="resources/js/scripts.js"></script>
    <script src="resources/js/bootstrap.js"></script>
    <script src="resources/js/npm.js"></script>
    <link rel="stylesheet" type="text/css" href="resources/css/mystyle.css">
    <link rel="stylesheet" type="text/css" href="resources/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="resources/css/bootstrap-theme.css">

    <script>
        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyDifaAcxog3tTMMvQoLz1leAr_Vh9Uq9Ms",
            authDomain: "webhacks-caade.firebaseapp.com",
            databaseURL: "https://webhacks-caade.firebaseio.com",
            storageBucket: "",
            messagingSenderId: "267096838240"
        };
        firebase.initializeApp(config);
    </script>

</head>
<body>

<!--
    <div id = "header">
        <div id = "logo">
            <h1 class = "title">doxtal.</h1>
            <h1 class = "title"><b>me</b></h1>
        </div>
        <div id = "signbut">
            <button class = "signin" id="login">Login</button>
            <button class = "signin" id="register">Register</button>
        </div>
    </div>
    -->

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <h1 class = "title">doxtal.</h1>
        <h1 class = "title"><b>me&nbsp&nbsp&nbsp</b></h1> <!--FIX THIS-->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand" href="#">Doxtal<</a> -->
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li ><a href="index.html">Home</a></li>
                <li class="active"><a href="#">Diagnostic</a></li>
                <li><a href="connect.html">Connect</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">
                        <form>
                            <input type="text" name="username" placeholder="Username" required>
                            <input type="password" name="password" placeholder="Password" required>
                            <input type="submit" value="Login">
                        </form>
                    </a></li>
            </ul>
        </div>
    </div>
</div>

<!--Important Part-->
<div id = "container">
    <div class = "box">
        <div id = "centerfrac">
            <div class = "box2">
                <div id = "symplist">
                    <ul>
                    </ul>
                </div>
                <p id = "symp">Enter your symptom here:</p>
                <input id="symtext" class = "nodeinput" type="text" name="symptom" list="symptoms">
                <br class="buttonbreak">
                <button id = "plus">+</button>
            </div>
        </div>
    </div>
    <div class="disease1">
        <div id="frac2">
            <div class="dname1">
                <div id = "dinfo1">

                </div>
                Death <br>
                The state of not being alive
            </div>
        </div>
    </div>
    <div class="disease2">
        <div id="frac2">
            <div class="dname1">
                <div id = "dinfo2">

                </div>
                Life <br>
                The state of not being dead
            </div>
        </div>
    </div>
    <div class="disease3">
        <div id="frac2">
            <div class="dname1">
                <div id = "dinfo1">

                </div>
                Freshman <br>
                The state of not being shafted
            </div>
        </div>
    </div>
    <div class="disease4">
        <div id="frac2">
            <div class="dname1">
                <div id = "dinfo1">

                </div>
                Junior <br>
                The state of being shafted
            </div>
        </div>
    </div>
    <div class="disease5">
        <div id="frac2">
            <div class="dname1">
                <div id = "dinfo1">

                </div>
                Sophomore <br>
                The state of being try-hard
            </div>
        </div>
    </div>
    <div class="disease6">
        <div id="frac2">
            <div class="dname1">
                <div id = "dinfo1">

                </div>
                Senior <br>
                The state of being a slacker
            </div>
        </div>
    </div>
    <div class="contact1">
        <div id="frac3">
            <div class="dname1">
                <div id = "dinfo1">

                </div>
                Contact a doctor
            </div>
        </div>
    </div>
    <div class="contact2">
        <div id="frac3">
            <div class="dname1">
                <div id = "dinfo1">

                </div>
                Prescription
            </div>
        </div>
    </div>
    <div class="contact3">
        <div id="frac3">
            <div class="dname1">
                <div id = "dinfo1">

                </div>
                Contact a doctor
            </div>
        </div>
    </div>
    <div class="contact4">
        <div id="frac3">
            <div class="dname1">
                <div id = "dinfo1">

                </div>
                Prescription
            </div>
        </div>
    </div>
    <div class="contact5">
        <div id="frac3">
            <div class="dname1">
                <div id = "dinfo1">

                </div>
                Contact a doctor
            </div>
        </div>
    </div>
    <div class="contact6">
        <div id="frac3">
            <div class="dname1">
                <div id = "dinfo1">

                </div>
                Prescription
            </div>
        </div>
    </div>
    <div class="contact7">
        <div id="frac3">
            <div class="dname1">
                <div id = "dinfo1">

                </div>
                Contact a doctor
            </div>
        </div>
    </div>
    <div class="contact8">
        <div id="frac3">
            <div class="dname1">
                <div id = "dinfo1">

                </div>
                Prescription
            </div>
        </div>
    </div>
    <div class="contact9">
        <div id="frac3">
            <div class="dname1">
                <div id = "dinfo1">

                </div>
                Contact a doctor
            </div>
        </div>
    </div>
    <div class="contact10">
        <div id="frac3">
            <div class="dname1">
                <div id = "dinfo1">

                </div>
                Prescription
            </div>
        </div>
    </div>
    <div class="contact11">
        <div id="frac3">
            <div class="dname1">
                <div id = "dinfo1">

                </div>
                Contact a doctor
            </div>
        </div>
    </div>
    <div class="contact12">
        <div id="frac3">
            <div class="dname1">
                <div id = "dinfo1">

                </div>
                Prescription
            </div>
        </div>
    </div>
</div>



</body>
</html>