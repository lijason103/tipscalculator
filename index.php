<html>
    <head>
    	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <link rel="stylesheet" href="styles.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,900&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCujHF6WY5yiZBhNkd8sHPsSXm3JFSum_M&libraries=places"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.11/lodash.js"></script>
    </head>
    <body>
        <!-- Inputs -->
        <div class="input-section">
        	<div class="input-wrapper">
 
            <div class="slider">
                <h5>Restaurant Name</h5>
            	<input id="googlePlace" type="text">
            </div>
           <div class="slider">
                <h5>Total amount $</h5>
            	<input id="totalBeforeTips"value="10" type="number" name="$ Total">
            </div>
            <div class="slider">
                <h5>Max Tip Percent %</h5>
            	<input id="maxTipPercent"value="20" type="number" name="$ Total">
            </div>
        </div>
        <!-- Rating -->
        <div class="rating-section">
            <div class="rating">
                <h5>Your rating</h4>
                <h3 id="your_rating">3</h3>
            </div>
            <div class="rating">
                <h5>Google rating</h4>
                <h3 id="google_rating">-</h3>
            </div>
        </div>
            <div class="slider-wrapper">
            <div class="slider">
                <h5>Your Generosity</h5>
                <div class="generosity-slider">
<!--                     <input id="gen-min" class="tinybox" type="box" value="0"/> -->
                    <div>
                        <input id="generosity" type="range" min="1" max="5" value="3"/>
                        <div class="range-labels">                           
                            <h6>1</h6>
                            <h6>2</h6>
                            <h6>3</h6>
                            <h6>4</h6>
                            <h6>5</h6>
                        </div>
                    </div>
<!--                     <input id="gen-max" class="tinybox" type="box" value="5"/> -->
                </div>
            </div>
            <div class="slider">
                <h5>Friendliness</h5>
                <div class="generosity-slider">
                	<div>
           			<input id="friendliness" type="range" min="1" max="5" value="3"/>
       		        <div class="range-labels">
                        <h6>1</h6>
                        <h6>2</h6>
                        <h6>3</h6>
                        <h6>4</h6>
                        <h6>5</h6>
                    </div>	
                </div>
                 </div>
            </div>
            <div class="slider">
                <h5>Responsiveness</h5>
                <div class="generosity-slider">
                	<div>
            	<input id="responsiveness" type="range" min="1" max="5" value="3"/>
	    	       <div class="range-labels">
	                    <h6>1</h6>
	                    <h6>2</h6>
	                    <h6>3</h6>
	                    <h6>4</h6>
	                    <h6>5</h6>
	                </div>	
	             </div>
	            </div>
            </div>
		</div>

        <!-- Calculation -->
        <div class="calculation-section">
            <p class="avgMessage aboveAvg" id="avgMessage">-</p>
            <div>
                <div class="output">
                    <h5>Tips:</h5>
                    <h6 id="tips">0</h6>
                </div>
                <div class="output">
                    <h5>Total:</h5>
                    <h6 id="total">0</h6>
                </div>
            </div>
        </div>
    </body>
    <script src="script.js"></script>
</html>