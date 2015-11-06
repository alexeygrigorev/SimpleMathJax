Patched [SimpleMathJax](https://www.mediawiki.org/wiki/Extension:SimpleMathJax)


- install from https://github.com/alexeygrigorev/SimpleMathJax/archive/master.zip
- add `require_once "$IP/extensions/SimpleMathJax/SimpleMathJax.php";` to `LocalSettings.php`


Script 
	
	
	mkdir -p extensions/SimpleMathJax/
	cd extensions/SimpleMathJax/
	wget https://github.com/alexeygrigorev/SimpleMathJax/archive/master.zip
	unzip master.zip 
	mv SimpleMathJax-master/SimpleMathJax.* .
	rm -r SimpleMathJax-master/ master.zip
	cd ../..
	echo 'require_once "$IP/extensions/SimpleMathJax/SimpleMathJax.php";' >> LocalSettings.php