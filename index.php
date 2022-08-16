<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        canvas{
            border: 1px solid;
        }
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
        var color = 'red';

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


/*      var grad = ctx.createRadialGradient(100,100,50,90,100,100);
        grad.addColorStop(0, 'blue');
        grad.addColorStop(0.5, 'green');
        grad.addColorStop(1, 'red');
        ctx.fillStyle = grad;
        ctx.fillRect(0,0,200,200);
 */
/*      var img = document.getElementById('imagen');
        ctx.drawImage(img, 100,100);*/

/*         canvas.addEventListener('click',  (e)=>{
         //   console.log(e.clientX, e.clientY);
            ctx.fillRect(e.offsetX-25,e.offsetY-25,50,50);
        }); */


/*         canvas.addEventListener('click',  (e)=>{
         //   console.log(e.clientX, e.clientY);
            ctx.beginPath(); 
            ctx.strokeStyle = "#000000";
            ctx.fillStyle = 'rgba(62,95,138,0.5)';
            ctx.arc(e.offsetX, e.offsetY, 50,100, 0, Math.PI * 2);
            ctx.fill();
            ctx.stroke();
        }); */


        canvas.addEventListener('click',  (e)=>{
         //   console.log(e.clientX, e.clientY);
            ctx.beginPath(); 
            ctx.strokeStyle = "#000000";
            ctx.fillStyle = color;
            ctx.arc(e.offsetX, e.offsetY, 50,100, 0, Math.PI * 2);
            ctx.fill();
            ctx.stroke();
        });
        

        canvas.addEventListener('mouseover', (e)=>{
            color = generateRandomColor();
            console.log(color);

        });

        function generateRandomColor() {
        var letters = '0123456789ABCDEF';
        var color = '#';
        for (var i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
    
        return color + 'C9';
}




</script>
</body>
</html>