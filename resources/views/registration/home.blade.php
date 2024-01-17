<!Doctype Html>
<Html>
<Head>
<Title>
Make a Navigation Bar
</Title>
<style type=text/css>
body
{
height: 125vh;
margin-top: 80px;
padding: 30px;
background-size: cover;
font-family: sans-serif;
}
header {
background-color: orange;
position: fixed;
left: 0;
right: 0;
top: 5px;
height: 30px;
display: flex;
align-items: center;
box-shadow: 0 0 25px 0 black;
}
header * {
display: inline;
}
header li {
margin: 20px;
}
header li a {
color: blue;
text-decoration: none;
}
</style>
</Head>
<Body>
<header>
<nav>
<ul>
<li>
<a href="{{'/'}}"> Home </a>
</li>
<li>
<a href="{{'/registration/register'}}"> Register </a>
</li>
<li>
<a href="{{'/product/create'}}"> Create Form </a>
</li>
<li> <a href="{{'/registration/login'}}"> Login </a>
</li>
<li>
<a href="{{'/viewing'}}"> View Data </a>
</li>
</ul>
</nav>
</header>
        This is the first Routing through buttons and Chor tags
</Body>
</Html>
