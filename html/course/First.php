HTML
Hyper text mark up language
* Define the content of web pages

CSS
Cascading style sheet
* Css specify the layout of web pages.

remove any space
*{
	margin:0; padding:0; box-sizing:border-box; (include width+padding+border width)
}
 
1) color:red
2) Background Property
background-color,background-image,background-repeat,
background-position,background-size,background-attachment:fixed

background-image:url(images/demo.png)
background-repeat:repeat-x,repeat-y,no-repeat
background-position:right top
background-size: 150px 100px (xaxis,yaxis),cover(full cover),contain(propotinate image ratio)
background-attachment:fixed,scroll

Homework
(background.html)(background-example.png)

3) Font Property
Google font- https://fonts.google.com/
1em=16px
font-family,font-variant:small-caps,font-size:2em,
font-style:italic,font-weight:bold or 100-900 value,

4) Text Css
font-family,letter-spacing,word-spacing,text-align,text-transform

5) Link Css
:link  - default unvisited link color 
:visited- link color changes after site visited
:hover - link color changes on hover
:active- link color change on click


6) Border
border-width,border-style:dotted,border-color

7) List- Allows you to control the shape of marker
 ul{ list-style-type: square;}  //circle
ol{ list-style-type: upper-alpha; } //upper-roman

8) Box Model
Content,Padding,Border,Margin

9)Scrollbars or Overflow - If content is large and out of border(box) then use
 overflow:hidden- hide extra content
 overflow:auto - show vertical scrollbar
 overflow:scroll- show both vertical and horizontal scrollbar

10) Position
<div class="father">
 <div class="child1">Child1</div>
 <div class="child2">child2</div>
 <div class="child3">child3</div>
 <div class="child4">child4</div>
</div>	
.father{
			width: 600px;
			height: 300px;
			background-color: red;
			position: relative;
		}
		.child1{width: 100px; height:60px; background-color: green;position: absolute;left: 0}
		.child2{width: 100px; height:60px; background-color: yellow;position: absolute;right: 0}
		.child3{width: 100px; height:60px; background-color: orange;position: absolute;bottom: 0;right: 0}
		.child4{width: 100px; height:60px; background-color: pink;position: absolute;bottom: 0}

Z Index- It works with position and specifiy stack order of element
z-index:1;		

11) Css Float
float:left, float:right
display
block,inline,inline-block

inline- takes width as much as content no effect of width,height set
span,a,img,em,strong,i

inline block- same as inline but you can set width,height

block- starts on new line and takes full width
div,p,h1,li,section

<p>Hello<i >Anil Tomar</i> how are you!!</p>
<div class="header">
 <div class="logo">Anil Tomar</div>
 <div class="menu">
 	<ul>
 		<li>Menu1</li>
 		<li>Menu2</li>
 		<li>Menu3</li> 
    </ul>		
 </div>
</div>	
 background-color: red; line-height:50px;float:right }
		ul{ list-style: none; text-align: right;}
		li{ display: inline-block;}  
<style>
		.header{width:100%;height: 80px; background-color: black;}
		.logo{width:30%;height: 80px; background-color: yellow; line-height:80px; text-align: center;float: left}
		.menu{width:70%;height:80px; padding: 0 10px; cursor: pointer;}
	</style>	

	
	11) Table css
	.content-table{
		border-collapse:collapse
		min-width:600px
	}
	.content-table thead tr{background color:grey;text-align:left;}
	.content-table th,content-table td{padding: 10px 10px 10px 10px;}
	.content-table tr:nth-child(even){background color: blue;}
	.content-table tr: last-child{border bottom :1px solid black;}




