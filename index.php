<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #imagen{
            display: none;
        }
    
    </style>
</head>
<body>
 
    <canvas id="canvas" width="500" height="500">
        Hola, tu navegador no funciona
    </canvas>
    <img src="descarga.jpg" alt="" id="imagen">

    <script>
        let canvas = document.getElementById('canvas');
        let ctx = canvas.getContext('2d');

        // texto

/*       ctx.font = '30px Arial';
        ctx.fillText('Hola mundo', 30, 100);
        ctx.strokeText('Hola munndo', 30,60) */


        // gradiente
/*         let grad = ctx.createLinearGradient(0,90,400,0);
        grad.addColorStop(0, 'blue');
        grad.addColorStop(1, 'red');
        ctx.fillStyle = grad;
        ctx.fillRect(300,160,400,90);


        grad = ctx.createLinearGradient(0,90,400,0);
        grad.addColorStop(0, 'yellow');
        grad.addColorStop(1, 'red');
        ctx.fillStyle = grad;
        ctx.fillRect(30,10,100,90); */


/*         var grad = ctx.createRadialGradient(100,100,50,90,100,100);
        grad.addColorStop(0, 'blue');
        grad.addColorStop(0.5, 'green');
        grad.addColorStop(1, 'red');
        ctx.fillStyle = grad;
        ctx.fillRect(0,0,200,200);
 */
/*         var img = document.getElementById('imagen');
        ctx.drawImage(img, 100,100);     */

        


</script>
</body>
</html>