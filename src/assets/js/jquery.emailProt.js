/*  Email obfuscator by stylephreak: http://codesnippets.joyent.com/user/stylephreak#post1735 
-------------------------------------------------------------------------------------------*/
jQuery.fn.emailProt = function(e,t) {
	$(this).each(function(){
		e = this.rel.replace('|','@');
		// 't' is the link text after script runs
		t = this.title;
		this.href = 'mailto:' + e;
		//added class for styling purposes, and changed the "text" of element
		$(this).text(t).addClass('mailto');
	});
};