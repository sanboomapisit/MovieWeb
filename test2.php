<html>
 <head>
    <style>

    /* Set additional styling options for the columns */
    .column {
    float: left;
    }

    /* Set width length for the left, right and middle columns */
    .left {
    width: 20%;
		margin-left:15%;
    }

    .middle {
    width: 30%;
    }
    
    .right {
    width:20%;
		margin-right:10%;
    }

    .row:after {
    content: "";
    display: table;
    clear: both;
    }
    </style>
 </head>
 <body>
    <div class="row">
        <div class="column left" style="background-color:#FFB695;">
           aaaaaaaaaaa
			<div class=row>
            aaaaaaaaaaa
			</div></div><div class=row>
            aaaaaaaaaaa
			</div>
		<div class="column left r" style="background-color:#FFB695;">
            aaaaaaaaaaaaaaaaaa
			aaaaaaa
            
        </div>
        <div class="column middle" style="background-color:#96D1CD;">
            <h2>Column 2</h2>
            <p>Data..</p>
        </div>
        <div class="column right" style="background-color:#74C3E1;">
            <h2>Column 3</h2>
            <p>Data..</p>
        </div>
    </div>
 </body>
</html>