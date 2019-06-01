<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Scripts clients - Seconde session 2016</title>
    </head>
    <body>

        <h1 id="h1">test</h1>
        <form id="form">
           <label for="">pick one of them:</label><br/><br/>
            check1
            <input type="checkbox" name="check" id="check1" value="check1"/>
            check2
            <input type="checkbox" name="check" id="check2" value="check2"/>
            check3
            <input type="checkbox" name="check" id="check3" value="check3"/>

            <br/><br/>

            <label for="">pick one of them: </label><br/><br/>
            radio1
            <input type="radio" name="rad" id="radio1" value="radio1"/>
            radio2
            <input type="radio" name="rad" id="radio2" value="radio2"/>
            radio3
            <input type="radio" name="rad" id="radio3" value="radio3"/>

            <br/><br/>

            <label for="">select one of them: </label><br/><br/>
            <select name="select" id="select">
                <option value="select1">select1</option>
                <option value="select2">select2</option>
                <option value="select3">select3</option>
            </select>
            <br/>
            <input type="submit" id="click" value="Go"/>
        </form>
        
    </body>
    <script src="js/libs/jquery/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
</html>
