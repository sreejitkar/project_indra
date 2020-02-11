function Scroll() {
	// body...
	var top= documnet.getElementByClass('bodydiv');
	var ypos = window.pageYOffset;
	if(ypos>500)
	{
		top.style.opacity='0';

	}
	else
	{
		top.style.opacity="1";
	}
	window.addEventListener("scroll",Scroll);
}