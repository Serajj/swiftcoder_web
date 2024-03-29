<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWIFTCODER</title>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Amatic+SC:400,700");
body {
  font-family: 'Amatic SC', sans-serif;
  font-size: 100px;
}
.test {
  -webkit-animation: squiggly-anim 0.34s linear infinite;
          animation: squiggly-anim 0.34s linear infinite;
}
body {
  background: #111;
  color: #fff;
}
.test {
  display: inline-block;
  vertical-align: middle;
  width: 100%;
  outline: none;
  text-align: center;
  line-height: 1;
}
.small {
  font-size: 0.5em;
}
.smaller {
  font-size: 0.4em;
}
p {
  margin: 0;
}
@-webkit-keyframes squiggly-anim {
  0% {
    filter: url("#squiggly-0");
  }
  25% {
    filter: url("#squiggly-1");
  }
  50% {
    filter: url("#squiggly-2");
  }
  75% {
    filter: url("#squiggly-3");
  }
  100% {
    filter: url("#squiggly-4");
  }
}
@keyframes squiggly-anim {
  0% {
    filter: url("#squiggly-0");
  }
  25% {
    filter: url("#squiggly-1");
  }
  50% {
    filter: url("#squiggly-2");
  }
  75% {
    filter: url("#squiggly-3");
  }
  100% {
    filter: url("#squiggly-4");
  }
}






.container {
  position: absolute;
  transform: translate(-50%, -50%);
  top: 40%;
  left: 50%;
}

.glitch, .glow {
  color: #dfbfbf;
  position: relative;
  font-size: 9vw;
  animation: glitch 5s 5s infinite;
}

.glitch::before, .glow::before {
  content: attr(data-text);
  position: absolute;
  left: -2px;
  text-shadow: -5px 0 magenta;
  background: black;
  overflow: hidden;
  top: 0;
  animation: noise-1 3s linear infinite alternate-reverse, glitch 5s 5.05s infinite;
}

.glitch::after, .glow::after {
  content: attr(data-text);
  position: absolute;
  left: 2px;
  text-shadow: -5px 0 lightgreen;
  background: black;
  overflow: hidden;
  top: 0;
  animation: noise-2 3s linear infinite alternate-reverse, glitch 5s 5s infinite;
}

@keyframes glitch {
  1% {
    transform: rotateX(10deg) skewX(90deg);
  }
  2% {
    transform: rotateX(0deg) skewX(0deg);
  }
}
@keyframes noise-1 {
  3.3333333333% {
    clip-path: inset(87px 0 3px 0);
  }
  6.6666666667% {
    clip-path: inset(60px 0 5px 0);
  }
  10% {
    clip-path: inset(40px 0 48px 0);
  }
  13.3333333333% {
    clip-path: inset(92px 0 5px 0);
  }
  16.6666666667% {
    clip-path: inset(59px 0 41px 0);
  }
  20% {
    clip-path: inset(66px 0 28px 0);
  }
  23.3333333333% {
    clip-path: inset(68px 0 9px 0);
  }
  26.6666666667% {
    clip-path: inset(88px 0 12px 0);
  }
  30% {
    clip-path: inset(89px 0 2px 0);
  }
  33.3333333333% {
    clip-path: inset(59px 0 2px 0);
  }
  36.6666666667% {
    clip-path: inset(10px 0 62px 0);
  }
  40% {
    clip-path: inset(66px 0 33px 0);
  }
  43.3333333333% {
    clip-path: inset(50px 0 32px 0);
  }
  46.6666666667% {
    clip-path: inset(32px 0 52px 0);
  }
  50% {
    clip-path: inset(81px 0 4px 0);
  }
  53.3333333333% {
    clip-path: inset(2px 0 74px 0);
  }
  56.6666666667% {
    clip-path: inset(42px 0 10px 0);
  }
  60% {
    clip-path: inset(53px 0 6px 0);
  }
  63.3333333333% {
    clip-path: inset(53px 0 13px 0);
  }
  66.6666666667% {
    clip-path: inset(10px 0 26px 0);
  }
  70% {
    clip-path: inset(47px 0 21px 0);
  }
  73.3333333333% {
    clip-path: inset(96px 0 2px 0);
  }
  76.6666666667% {
    clip-path: inset(59px 0 18px 0);
  }
  80% {
    clip-path: inset(76px 0 2px 0);
  }
  83.3333333333% {
    clip-path: inset(62px 0 5px 0);
  }
  86.6666666667% {
    clip-path: inset(5px 0 71px 0);
  }
  90% {
    clip-path: inset(87px 0 10px 0);
  }
  93.3333333333% {
    clip-path: inset(90px 0 11px 0);
  }
  96.6666666667% {
    clip-path: inset(27px 0 15px 0);
  }
  100% {
    clip-path: inset(46px 0 2px 0);
  }
}
@keyframes noise-2 {
  0% {
    clip-path: inset(9px 0 6px 0);
  }
  3.3333333333% {
    clip-path: inset(10px 0 58px 0);
  }
  6.6666666667% {
    clip-path: inset(54px 0 47px 0);
  }
  10% {
    clip-path: inset(46px 0 6px 0);
  }
  13.3333333333% {
    clip-path: inset(27px 0 67px 0);
  }
  16.6666666667% {
    clip-path: inset(15px 0 44px 0);
  }
  20% {
    clip-path: inset(11px 0 86px 0);
  }
  23.3333333333% {
    clip-path: inset(95px 0 6px 0);
  }
  26.6666666667% {
    clip-path: inset(9px 0 21px 0);
  }
  30% {
    clip-path: inset(94px 0 2px 0);
  }
  33.3333333333% {
    clip-path: inset(93px 0 6px 0);
  }
  36.6666666667% {
    clip-path: inset(12px 0 40px 0);
  }
  40% {
    clip-path: inset(30px 0 67px 0);
  }
  43.3333333333% {
    clip-path: inset(69px 0 9px 0);
  }
  46.6666666667% {
    clip-path: inset(90px 0 7px 0);
  }
  50% {
    clip-path: inset(14px 0 46px 0);
  }
  53.3333333333% {
    clip-path: inset(15px 0 19px 0);
  }
  56.6666666667% {
    clip-path: inset(33px 0 57px 0);
  }
  60% {
    clip-path: inset(60px 0 6px 0);
  }
  63.3333333333% {
    clip-path: inset(41px 0 1px 0);
  }
  66.6666666667% {
    clip-path: inset(10px 0 14px 0);
  }
  70% {
    clip-path: inset(11px 0 55px 0);
  }
  73.3333333333% {
    clip-path: inset(38px 0 61px 0);
  }
  76.6666666667% {
    clip-path: inset(26px 0 29px 0);
  }
  80% {
    clip-path: inset(95px 0 2px 0);
  }
  83.3333333333% {
    clip-path: inset(46px 0 7px 0);
  }
  86.6666666667% {
    clip-path: inset(36px 0 21px 0);
  }
  90% {
    clip-path: inset(39px 0 40px 0);
  }
  93.3333333333% {
    clip-path: inset(13px 0 83px 0);
  }
  96.6666666667% {
    clip-path: inset(74px 0 11px 0);
  }
  100% {
    clip-path: inset(53px 0 8px 0);
  }
}
.scanlines {
  overflow: hidden;
  mix-blend-mode: difference;
}

.scanlines::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: repeating-linear-gradient(to bottom, transparent 0%, rgba(255, 255, 255, 0.05) 0.5%, transparent 1%);
  animation: fudge 7s ease-in-out alternate infinite;
}

@keyframes fudge {
  from {
    transform: translate(0px, 0px);
  }
  to {
    transform: translate(0px, 2%);
  }
}
.glow {
  text-shadow: 0 0 1000px #dfbfbf;
  color: transparent;
  position: absolute;
  top: 0;
}

.subtitle {
  font-family: Arial, Helvetica, sans-serif;
  font-weight: 100;
  font-size: 0.8vw;
  color: rgba(165, 141, 141, 0.4);
  text-transform: uppercase;
  letter-spacing: 1em;
  text-align: center;
  position: absolute;
  left: 17%;
  animation: glitch-2 5s 5.02s infinite;
}

@keyframes glitch-2 {
  1% {
    transform: rotateX(10deg) skewX(70deg);
  }
  2% {
    transform: rotateX(0deg) skewX(0deg);
  }
}
    </style>
</head>
<body>

  <div class="container">
  <div class="glitch" data-text="SWIFTCODER">SWIFTCODER</div>
  <div class="glow">SWIFTCODER</div>
  
  </div>
  <div class="scanlines"></div>

    

    <div class="test" contenteditable>
  
  <p class="small">(We assist you in creating a foundation on which to grow your business.)</p>
  <p class="smaller">(Contact : +91-9140327455)</p>
  <p class="smaller">(+91-9140453176 , +91-7651926697)</p>
  <p class="smaller">(Mail Us : dev@swiftcoder.com , seraj.dev@gmail.com)</p>
</div>

<svg xmlns="http://www.w3.org/2000/svg" version="1.1">
  <defs>

    
    <filter id="squiggly-0">
      <feTurbulence id="turbulence" baseFrequency="0.02" numOctaves="3" result="noise" seed="0"/>
      <feDisplacementMap id="displacement" in="SourceGraphic" in2="noise" scale="6" />
    </filter>
    <filter id="squiggly-1">
      <feTurbulence id="turbulence" baseFrequency="0.02" numOctaves="3" result="noise" seed="1"/>
<feDisplacementMap in="SourceGraphic" in2="noise" scale="8" />
    </filter>
    
    <filter id="squiggly-2">
      <feTurbulence id="turbulence" baseFrequency="0.02" numOctaves="3" result="noise" seed="2"/>
<feDisplacementMap in="SourceGraphic" in2="noise" scale="6" />
    </filter>
    <filter id="squiggly-3">
      <feTurbulence id="turbulence" baseFrequency="0.02" numOctaves="3" result="noise" seed="3"/>
<feDisplacementMap in="SourceGraphic" in2="noise" scale="8" />
    </filter>
    
    <filter id="squiggly-4">
      <feTurbulence id="turbulence" baseFrequency="0.02" numOctaves="3" result="noise" seed="4"/>
<feDisplacementMap in="SourceGraphic" in2="noise" scale="6" />
    </filter>
  </defs> 
</svg>
</body>
</html>