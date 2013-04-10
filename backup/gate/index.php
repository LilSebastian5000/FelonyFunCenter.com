<?php function o(){return 'opacity:'.(rand(0,2)===2?rand(6,10)/10:1);}?>
<style>body:before{position:absolute;width:100%;height:100%;content:'';opacity:0.6;background:url(data:image/png;base64,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);}</style>
<body style='margin:0;background:-webkit-radial-gradient(#333,#000)'>
<svg>
<defs>
	 <!-- fill=#a00->#600->4% -->
	<pattern id=Brk width=40 height=10 patternUnits=userSpaceOnUse>
		<image xlink:href=Brk.png x=0 y=0 width=40 height=10></image>
	</pattern>
	 <!-- fill=#aaa->2%(Mono) -->
	<pattern id=Cap width=10 height=10 patternUnits=userSpaceOnUse>
		<image xlink:href=Cap.png x=0 y=0 width=10 height=10></image>
	</pattern>
	 <!-- fill=#000->4%(Mono) -->
	<pattern id=Bar width=10 height=10 patternUnits=userSpaceOnUse>
		<image xlink:href=Bar.png x=0 y=0 width=10 height=10></image>
	</pattern>

	<pattern id=Grs width=10 height=10 patternUnits=userSpaceOnUse>
		<image xlink:href='http://www.photosshow.com/wp-content/uploads/2011/07/grass.jpg' width=1024 height=768></image>
	</pattern>

	<rect id=lgBrk width=40  height=10 fill=url(#Brk) stroke=#aaa stroke-width=1.5></rect>
	<rect id=smBrk width=20  height=10 fill=url(#Brk) stroke=#aaa stroke-width=1.5></rect>
	<rect id=lgCap width=400 height=8  fill=url(#Cap) y=-8></rect>
</defs>


<g transform='translate(0,100)'>
	<!-- Left Wall -->
	<g transform='translate(0,100)'>
		<?php for($b=0;$b<16;$b++){echo"<g transform=translate(1,".($b*20).")>";$c=10;
			for($i=0;$i<$c;  $i++){echo"<use xlink:href=#lgBrk x=".($i*40)."         style=".o()."></use>";}
			for($i=0;$i<$c+1;$i++){echo"<use xlink:href=#lgBrk x=".($i*40-20)." y=10 style=".o()."></use>";}
		echo"</g>";}?>
		<use xlink:href=#lgCap></use>
		<rect x=0 y=800 width=400 height=400 fill=url(#Grs)></rect>
	</g>
	<!-- Left Wall -->
	<g transform='translate(1060,100)'>
		<?php for($b=0;$b<16;$b++){echo"<g transform=translate(1,".($b*20).")>";$c=10;
			for($i=0;$i<$c;  $i++){echo"<use xlink:href=#lgBrk x=".($i*40)."         style=".o()."></use>";}
			for($i=0;$i<$c+1;$i++){echo"<use xlink:href=#lgBrk x=".($i*40-20)." y=10 style=".o()."></use>";}
		echo"</g>";}?>
		<use xlink:href=#lgCap></use>
	</g>


	<!-- Left Pillar -->
	<g transform='translate(400,74)'>
		<?php for($b=0;$b<18;$b++){
			echo"<use xlink:href=#lgBrk y=".($b*20)   ."     ></use>";
			echo"<use xlink:href=#smBrk y=".($b*20)   ." x=40></use>";
			echo"<use xlink:href=#smBrk y=".($b*20+10)."     ></use>";
			echo"<use xlink:href=#lgBrk y=".($b*20+10)." x=20></use>";
			//echo"<rect x=0   y=".($b*20)."    width=40 height=10 fill=#a00 stroke=#aaa stroke-width=1></rect>";
			//echo"<rect x=40  y=".($b*20)."    width=20 height=10 fill=#a00 stroke=#aaa stroke-width=1></rect>";
			//echo"<rect x=0   y=".($b*20+10)." width=20 height=10 fill=#a00 stroke=#aaa stroke-width=1></rect>";
			//echo"<rect x=20  y=".($b*20+10)." width=40 height=10 fill=#a00 stroke=#aaa stroke-width=1></rect>";

			//echo"<path d='M61 ".($b*20).",             l10 -16, v10, l-10 16, v-10' fill=#a00 stroke=#aaa stroke-width=1></path>";
			//echo"<path d='M61 ".($b*20).",    m10 -16, l5   -8, v10, l-5   8, v-10' fill=#a00 stroke=#aaa stroke-width=1></path>";
			//echo"<path d='M61 ".($b*20+10).",          l5   -8, v10, l-5   8, v-10' fill=#a00 stroke=#aaa stroke-width=1></path>";
			//echo"<path d='M61 ".($b*20+10).", m5   -8, l10 -16, v10, l-10 16, v-10' fill=#a00 stroke=#aaa stroke-width=1></path>";
			echo"<path d='M60 ".($b*20)."             l10 -10, v10, l-10 10, v-10' fill=url(#Brk) stroke=#aaa stroke-width=1></path>";
			echo"<path d='M60 ".($b*20)."    m10 -10, l5   -5, v10, l-5   5, v-10' fill=url(#Brk) stroke=#aaa stroke-width=1></path>";
			echo"<path d='M60 ".($b*20+10)."          l5   -5, v10, l-5   5, v-10' fill=url(#Brk) stroke=#aaa stroke-width=1></path>";
			echo"<path d='M60 ".($b*20+10)." m5   -5, l10 -10, v10, l-10 10, v-10' fill=url(#Brk) stroke=#aaa stroke-width=1></path>";
		}?>
		<path d='M0 0, h60, l15 -15, h-60, l-15 15' fill=url(#Cap) stroke=#aaa stroke-width=1></path>
	</g>
	<!-- Right Pillar -->
	<g transform='translate(1002,74)'>
		<?php for($b=0;$b<18;$b++){
			echo"<use xlink:href=#lgBrk y=".($b*20)   ."     ></use>";
			echo"<use xlink:href=#smBrk y=".($b*20)   ." x=40></use>";
			echo"<use xlink:href=#smBrk y=".($b*20+10)."     ></use>";
			echo"<use xlink:href=#lgBrk y=".($b*20+10)." x=20></use>";
			//echo"<rect x=0   y=".($b*20)."    width=40 height=10 fill=#a00 stroke=#aaa stroke-width=1></rect>";
			//echo"<rect x=40  y=".($b*20)."    width=20 height=10 fill=#a00 stroke=#aaa stroke-width=1></rect>";
			//echo"<rect x=0   y=".($b*20+10)." width=20 height=10 fill=#a00 stroke=#aaa stroke-width=1></rect>";
			//echo"<rect x=20  y=".($b*20+10)." width=40 height=10 fill=#a00 stroke=#aaa stroke-width=1></rect>";

			//echo"<path d='M-1 ".($b*20).",              l-10 -16, v10, l10 16, v-10' fill=#a00 stroke=#aaa stroke-width=1></path>";
			//echo"<path d='M-1 ".($b*20).",    m-10 -16, l-5   -8, v10, l5   8, v-10' fill=#a00 stroke=#aaa stroke-width=1></path>";
			//echo"<path d='M-1 ".($b*20+10).",           l-5   -8, v10, l5   8, v-10' fill=#a00 stroke=#aaa stroke-width=1></path>";
			//echo"<path d='M-1 ".($b*20+10).", m-5   -8, l-10 -16, v10, l10 16, v-10' fill=#a00 stroke=#aaa stroke-width=1></path>";
			echo"<path d='M0 ".($b*20)."              l-10 -10, v10, l10 10, v-10' fill=url(#Brk) stroke=#aaa stroke-width=1></path>";
			echo"<path d='M0 ".($b*20)."    m-10 -10, l-5   -5, v10, l5   5, v-10' fill=url(#Brk) stroke=#aaa stroke-width=1></path>";
			echo"<path d='M0 ".($b*20+10)."           l-5   -5, v10, l5   5, v-10' fill=url(#Brk) stroke=#aaa stroke-width=1></path>";
			echo"<path d='M0 ".($b*20+10)." m-5   -5, l-10 -10, v10, l10 10, v-10' fill=url(#Brk) stroke=#aaa stroke-width=1></path>";
		}?>
		<path d='M0 0, h60, l-15 -15, h-60, l15 15' fill=url(#Cap) stroke=#aaa stroke-width=1></path>
	</g>



	<!-- Pathway -->
    <!--<path d='M474 408, h512, l240 400, h-992, z' fill=#333></path>-->



	<!-- Left Gate -->
	<g transform='translate(466,50)'>
		<path d='M0 20,h8,c100 0,156 -60,256 -60,v6,c-100 0,-156 60,-256 60,v24,c100 0,156 -60,256 -60,v6,c-100 0,-156 60,-256 60,v200,h256,v6,h-256,v24,h256,v6,h-256,v80,h254,v-412,h2,v418,h-264,z' fill=url(#Bar)></path>
	</g>
	<!-- Right Gate -->
	<g transform='translate(996,50)'>
		<path d='M0 20,h-8,c-100 0,-156 -60,-256 -60,v6,c100 0,156 60,256 60,v24,c-100 0,-156 -60,-256 -60,v6,c100 0,156 60,256 60,v200,h-256,v6,h256,v24,h-256,v6,h256,v80,h-254,v-412,h-2,v418,h264,z' fill=url(#Bar)></path>
	</g>
	<!-- Label -->
	<defs><path id=label d='M0 60,c100 0,156 -60,256 -60,c100 0,156 60,256 60' transform='translate(474,0)'></path></defs>
	<text x=264.5 y=0 style='font:50px Play,Helvetica;font-variant:small-caps;text-anchor:middle;dominant-baseline:central;text-shadow:0 2px 3px #b80' fill=#da2>
		<textPath xlink:href=#label>Felony Fun Center</textPath>
	</text>
</g></svg>
</body>