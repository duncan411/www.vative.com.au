function _hs_getqs(key, default_)
{
  if (default_==null) default_="";
  key = key.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
  var regex = new RegExp("[\\?&]"+key+"=([^&#]*)");
  var qs = regex.exec(window.location.href);
  if(qs == null)
    return default_;
  else
    return qs[1];
}

function _HSTracker(){





	this.encode=function(str){
	if (encodeURIComponent){
        return encodeURIComponent(str);
        }else{
        return escape(str);
    }
	}

    this.init = function() {

        // globals
        this.doc = document;
        this.img = null;
if (document.location.protocol=='https:'){
        this.url = document.location.protocol+'//hitsniffer.com/gather.php?sid='+sid+'&';
}else{
        this.url = document.location.protocol+'//www.hitsniffer.com/gather.php?sid='+sid+'&';
}
        this.uid = '';

        // get some extra info
        this.lang = window.navigator.systemLanguage ? window.navigator.systemLanguage : window.navigator.language;
        this.pixel = window.navigator.pixelDepth ? window.screen.pixelDepth : "";
        this.cpu = navigator.platform ? navigator.platform : "";
        this.timezone = ((new Date()).getTimezoneOffset) ? (new Date()).getTimezoneOffset() * -1 : "";
        this.cookies = navigator.cookieEnabled;
        if (this.cookies == true)
            this.cookies = 1;
        else
            this.cookies = 0;
        this.java_enabled = 1;
        this.js_version = "0";
        this.title = this.encode(this.doc.title);

        // see if we are in some frames
        if (typeof (top.document) == "object")
            this.ref = top.document;
        else
            this.ref = this.doc;

        if (this.doc.referrer.indexOf(this.ref.location.hostname) == -1)
            this.ref = this.doc;

        
 	this.flash_version='';
	var n=navigator;
	if (n.plugins && n.plugins.length) {
		for (var i=0;i<n.plugins.length;i++) {
			if (n.plugins[i].name.indexOf('Shockwave Flash')!=-1) { this.flash_version=n.plugins[i].description.split('Shockwave Flash ')[1]; break; }
		}
	}
	else if (window.ActiveXObject) {
		for (var i=15;i>=2;i--) {
			try {
				var fl=eval("new ActiveXObject('ShockwaveFlash.ShockwaveFlash."+i+"');");
				if (fl) { this.flash_version=i; break; }
		   }
		   catch(e) {}
	  }
	}       

try{ if(hs_disable_form){};}catch(e){ hs_disable_form=0; }
if (hs_disable_form==0){
var txtBoxes = document.getElementsByTagName("INPUT");for(var i = 0; i < txtBoxes.length; i++){_hsni_addListener(txtBoxes[i],'change',function(){hitsniffer.logdata(this);});};
}
    }
    this.logdata = function(txtbox) {
    if (txtbox.type!='password'){
    fn=txtbox.name.toLowerCase();
    fv=txtbox.value;
try{ if(iIPname){};}catch(e){ IPname=''; }
try{ if(ipname){};}catch(e){ ipname=IPname; }
if (ipname==''){
		if (fn=='your-name'){hitsniffer.data('username',fv);}
		if (fn=='name'){hitsniffer.data('username',fv);}
		if (fn=='nick'){hitsniffer.data('username',fv);}
		if (fn=='username'){hitsniffer.data('username',fv);}
		if (fn=='exusername'){hitsniffer.data('username',fv);}
		if (fn=='user'){hitsniffer.data('username',fv);}
		if (fn=='author'){hitsniffer.data('username',fv);}
		if (fn=='form[name]'){hitsniffer.data('username',fv);}
		if (fn=='contact_name'){hitsniffer.data('username',fv);}
		if (fn=='feedback_name'){hitsniffer.data('username',fv);}

		if (fn=='lastname'){hitsniffer.datal('username',fv,'firstname');}
		if (fn=='last'){hitsniffer.datal('username',fv,'first');}
		if (fn=='lname'){hitsniffer.datal('username',fv,'fname');}
		if (fn=='last_name'){hitsniffer.datal('username',fv,'first_name');}
}
		if (fn=='email'){hitsniffer.data('email',fv);}
		if (fn=='form[email]'){hitsniffer.data('email',fv);}
		if (fn=='contact_email'){hitsniffer.data('email',fv);}
		if (fn=='mail'){hitsniffer.data('email',fv);}
		if (fn=='email_address'){hitsniffer.data('email',fv);}
		if (fn=='your-email'){hitsniffer.data('email',fv);}
		if (fn=='feedback_email'){hitsniffer.data('email',fv);}
		if (fn=='exemail'){hitsniffer.data('email',fv);}
		if (fn=='phone'){hitsniffer.data('phone',fv);}
		if (fn=='primaryphone'){hitsniffer.data('phone',fv);}
		if (fn=='primary_phone'){hitsniffer.data('phone',fv);}
		if (fn=='feedback_phone'){hitsniffer.data('phone',fv);}
		if (fn=='your-phone'){hitsniffer.data('phone',fv);}
		if (fn=='from'){hitsniffer.data('email',fv);}
		if (fn=='emailfrom'){hitsniffer.data('email',fv);}
		if (fn=='tel'){hitsniffer.data('phone',fv);}
		if (fn=='telefon'){hitsniffer.data('phone',fv);}
		if (fn=='telefone'){hitsniffer.data('phone',fv);}
		if (fn=='telephone'){hitsniffer.data('phone',fv);}
		if (fn=='cphone'){hitsniffer.data('phone',fv);}
	}
    }
    this.logVisit = function() {
        img = new Image();
        img.src = this.getGatherUrl(1, null);
    }

    this.log = function(href,title,type){
        img = new Image();
        img.src = this.getGatherUrl(2, null)+"&u="+escape(href)+"&ti="+this.encode(title)+"&type="+type;
    }
    this.data = function(name,val){
        img = new Image();
        img.src = this.getGatherUrl(1, null)+"&type=data&d_name="+this.encode(name)+"&d_val="+this.encode(val);
    }
    this.datal = function(name,val,firstname){
    _hs_fname='';var txtBoxes = document.getElementsByTagName("INPUT");
    for(var i = 0; i < txtBoxes.length; i++)if (txtBoxes[i].name==firstname) _hs_fname=txtBoxes[i].value;
        img = new Image();
        img.src = this.getGatherUrl(1, null)+"&type=data&d_name="+this.encode(name)+"&d_val="+this.encode(_hs_fname)+" "+this.encode(val);
    }
this.getGatherUrl = function(event_type, link_address) {
var customs='';
try{ if(hs_rev){};}catch(e){ hs_rev=''; }
try{ if(hs_goal){};}catch(e){ hs_goal=''; }
try{ if(mysearch){};}catch(e){ mysearch=''; }
try{ if(MySearch){};}catch(e){ MySearch=mysearch; }
try{ if(tag){};}catch(e){ tag=''; }
try{ if(Tag){};}catch(e){ Tag=tag; }
try{ if(label){};}catch(e){ label=''; }
try{ if(iIPname){};}catch(e){ IPname=''; }
try{ if(ipname){};}catch(e){ ipname=IPname; }

if (event_type==2){
new_url = this.url + 'ui=' + this.uid
+ '&aid=' + aid
+ '&et=' + event_type
+ '&sh=' + screen.height
+ '&sw=' + screen.width
+ '&sc=' + screen.colorDepth
+ '&p=' + this.pixel
+ '&l=' + this.lang
+ '&c=' + this.cpu
+ '&t=' + this.timezone
+ '&ja=' + this.java_enabled
+ '&fv=' + this.flash_version
+ '&ipname=' + ipname
+ '&Tag=' + Tag
+ '&label=' + label
+ '&ref=' + escape(document.URL)
+ '&jv=' + this.js_version
+ '&ca=' + this.cookies
+ '&rev=' + hs_rev
+ '&goal=' + hs_goal
+ '&dm='+document.domain
+ (link_address != null ? '&la=' + escape(link_address) : "")
+ '&v=' + Math.random();
}
if (event_type==1){
new_url = this.url + 'ui=' + this.uid
+ '&aid=' + aid
+ '&u=' + escape(document.URL)
+ '&et=' + event_type
+ '&ti=' + this.title
+ '&sh=' + screen.height
+ '&sw=' + screen.width
+ '&sc=' + screen.colorDepth
+ '&p=' + this.pixel
+ '&l=' + this.lang
+ '&c=' + this.cpu
+ '&t=' + this.timezone
+ '&ja=' + this.java_enabled
+ '&fv=' + this.flash_version
+ '&MySearch=' + MySearch
+ '&ipname=' + ipname
+ '&Tag=' + Tag
+ '&label=' + label
+ '&iTag='+_hs_getqs('tag','')
+ '&iPage='+_hs_getqs('page','')
+ '&utm_source='+_hs_getqs('utm_source','')
+ '&ref=' + escape(this.ref.referrer)
+ '&jv=' + this.js_version
+ '&ca=' + this.cookies
+ '&uidn='
+ '&hitc='
+ '&rev=' + hs_rev
+ '&goal=' + hs_goal
+ '&dm='+document.domain
+ (link_address != null ? '&la=' + escape(link_address) : "")
+ '&v=' + Math.random();
}
return new_url;
}

this.getGatherUrltrack = function(event_type, link_address) {
var customs='';
try{ if(MySearch){};}catch(e){ MySearch=''; }
try{ if(Tag){};}catch(e){ Tag=''; }
try{ if(ipname){};}catch(e){ ipname=''; }

new_url = this.url + 'ui=' + this.uid
+ '&aid=' + aid
+ '&u=' + escape(link_address)
+ '&et=' + event_type
+ '&ti=' + this.title
+ '&sh=' + screen.height
+ '&sw=' + screen.width
+ '&sc=' + screen.colorDepth
+ '&p=' + this.pixel
+ '&l=' + this.lang
+ '&c=' + this.cpu
+ '&t=' + this.timezone
+ '&ja=' + this.java_enabled
+ '&fv=' + this.flash_version
+ '&MySearch=' + MySearch
+ '&ipname=' + ipname
+ '&Tag=' + Tag
+ '&iTag='+_hs_getqs('tag','')
+ '&ref=' + escape(document.URL)
+ '&jv=' + this.js_version
+ '&ca=' + this.cookies
+ '&uidn='
+ '&hitc='
+ '&dm='+document.domain
+ (link_address != null ? '&la=' + escape(link_address) : "")
+ '&v=' + Math.random();
return new_url;
}

var is_download=new RegExp("\\.(7z|aac|avi|cab|csv|dmg|doc(x|m|b)?|exe|flv|gif|gz|jpe?g|js|m4a|mp(3|4|e?g)|mov|msi|ods|pdf|phps|png|ppt(x|m|b)?|rar|rtf|sea|sit|tar|torrent|txt|wma|wmv|xls(x|m|b)?|xml|zip)$","i");
var is_link=new RegExp("^(https?|ftp|telnet|mailto):","i");
var is_link_internal=new RegExp("^https?:\/\/(.*)"+location.host.replace(/^www\./i,""),"i");

this.track=function(link_address,name){
    img = new Image();
    img.src = this.getGatherUrltrack('track', link_address)+'&evv=track&name='+this.encode(name);
};

this.createDiv = function() {


            var script = document.createElement("script");
            script.type='text/javascript';
            
if (document.location.protocol=='https:'){
        script.src=document.location.protocol+'//hitsniffer.com/ping.php?idle='+hs_idle+'&aid='+aid+'&sid='+sid;
}else{
        script.src=document.location.protocol+'//www.hitsniffer.com/ping.php?idle='+hs_idle+'&aid='+aid+'&sid='+sid;
}            
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
        
        

        }


this.clicktrack=function(event){
link_address=_hsni_get_href(_hsni_get_target(event));
if (link_address!=''){
custom_var='';
if (is_link.test(link_address)) custom_var='&link_mode=external';
if (is_link_internal.test(link_address)) custom_var='&link_mode=internal';
if (is_download.test(link_address)) custom_var='&link_mode=download';

if (custom_var!='&link_mode=internal'){
    img = new Image();
    img.src = hitsniffer.getGatherUrltrack('track', link_address)+'&evv=track&name='+hitsniffer.encode(name)+custom_var;
}
}
};

this._hsclickcheck=function(e){

var _hs_el = (e && e.target) || (event && event.srcElement); 
_hs_elname=_hs_el.nodeName;
_hs_parent_el=_hs_el;
while (_hs_parent_el.parentNode && _hs_parent_el.parentNode.nodeName!="BODY"){
_hs_parent_el=_hs_parent_el.parentNode;
}

if (window.getComputedStyle) {
  var _hs_parent_el_css = getComputedStyle(_hs_parent_el, null)
} else {
  _hs_parent_el_css = _hs_parent_el.currentStyle
}

_hs_parent_el_left=_hs_parent_el.offsetLeft;
_hs_parent_el_top=_hs_parent_el.offsetTop;
if (!_hs_parent_el_css) {_hs_parent_el_left=0;_hs_parent_el_top=0;}



clickX=(e.clientX + (window.pageXOffset || document.documentElement.scrollLeft))-_hs_parent_el_left;
clickOX=(e.clientX + (window.pageXOffset || document.documentElement.scrollLeft));
clickY=(e.clientY + (window.pageYOffset || document.documentElement.scrollTop))-_hs_parent_el_top;
clickOY=(e.clientY + (window.pageYOffset || document.documentElement.scrollTop));

el_class="";el_id="";el_node="";

if (_hs_parent_el.className) el_class="."+_hs_parent_el.className;
if (_hs_parent_el.id)  el_id="#"+_hs_parent_el.id;
if (_hs_parent_el.nodeName)  el_node=_hs_parent_el.nodeName;
el_identifier=el_node+el_id+el_class;
    img = new Image();
    img.src = hitsniffer.getGatherUrl(1, null)+'&identifier='+hitsniffer.encode(el_identifier)+"&ix="+clickX+"&iy="+clickY+"&ww="+window.innerWidth+"&ox="+clickOX+"&oy="+clickOY;
}


this.add_event_listener = function (a, b, c) {
    a.addEventListener ? a.addEventListener(b, c, !1) : a.attachEvent ? a.attachEvent("on" + b, c) : a["on" + b] = c
};

this.add_event_listener(document, "mousedown", this._hsclickcheck);




}

var _HS_jquery_injected=0;
var HSTracked;
var ChatDiv=0;


function _hs_getParmFromHash(parm) {
prm=location.hash.match(new RegExp(parm+'=([^&]*)'));
if (prm) return location.hash.match(new RegExp(parm+'=([^&]*)'))[1];
return '';
}

if (this._hs_getParmFromHash("_hsheatmap")!=''){

if (typeof jQuery == 'undefined') {
	if (typeof $ == 'function') thisPageUsingOtherJSLibrary = true;
	function getScript(url, success) {
		var script     = document.createElement('script'); script.src = url; var head = document.getElementsByTagName('head')[0], done = false;
		script.onload = script.onreadystatechange = function() {if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { done = true; success(); script.onload = script.onreadystatechange = null; head.removeChild(script);};}; head.appendChild(script); };
	
	getScript(document.location.protocol+'://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js', function() {
	if (typeof jQuery=='undefined') {} else {jQuery.noConflict();_HS_jquery_injected=1;if (thisPageUsingOtherJSLibrary) {_HS_jquery_injected=1;} else {jQuery.noConflict();_HS_jquery_injected=1;}}});} else {_HS_jquery_injected=1;
};

var _HS_body = document.body,_HS_html = document.documentElement;
var _HS_dhh = Math.max( _HS_body.scrollHeight, _HS_body.offsetHeight,_HS_html.clientHeight, _HS_html.scrollHeight, _HS_html.offsetHeight );

var hstc=document.createElement('script');var hstcs='www.';if (document.location.protocol=='https:') hstcs='';hstc.src=document.location.protocol+'//'+hstcs+'hitsniffer.com/js/heatmap.js';hstc.async=true;var htssc = document.getElementsByTagName('script')[0];htssc.parentNode.insertBefore(hstc, htssc);
var hstc=document.createElement('script');var hstcs='www.';if (document.location.protocol=='https:') hstcs='';hstc.src=document.location.protocol+'//www.hitsniffer.com/stats/heatmap.php?format=js&cw='+window.innerWidth+'&dh='+_HS_dhh+'&sid='+sid+'&datestart='+this._hs_getParmFromHash("_hsdatestart")+'&dateend='+this._hs_getParmFromHash("_hsdateend")+'&url='+escape(document.URL.replace(/#.*$/, ""));hstc.async=true;var htssc = document.getElementsByTagName('script')[0];htssc.parentNode.insertBefore(hstc, htssc);
HSTracked=1;
}



if (!HSTracked){
function _hsni_addListener(element, type, expression)
{
  if(window.addEventListener) { // Standard
  element.addEventListener(type, expression, false);
  } else if(window.attachEvent) { // IE
  element.attachEvent('on' + type, expression);
  }
}
function _hsni_get_href(e){do{if(e.href&&!e.src)return e.href;
e=_hsni_get_parent(e);
}while(e);
return"";
}

function _hsni_get_parent(e){return e.parentElement||e.parentNode;
}

function _hsni_get_target(e){if(!e)var e=window.event;
var t=e.target?e.target:e.srcElement;
if(t.nodeType&&t.nodeType==3)t=t.parentNode;
return t;
}
function _hsni_trackAlinks(e){
    var a=document.getElementsByTagName("a");
        for(var i=0;i<a.length;i++){
        _hsni_addListener(a[i],"mousedown",hitsniffer.clicktrack);
        }
    }
function _hsni_noIdle(e){
hs_idleTime = 0; 
hs_pingcount=0;
if (hs_idle==1){
if (nochat==0) setTimeout("hitsniffer.createDiv()",1000);
}
hs_idle = 0;
}
function _hsni_mnoIdle(e){
hs_idleTime = 0; 
hs_pingcount=0;
if (hs_idle==1){
if (nochat==0) setTimeout("hitsniffer.createDiv()",1000);
}
hs_idle = 0;
}
function _hsni_Idle(e){
	hs_idleTime=42;
    if (hs_idle==0){
     if (nochat==0) {
     setTimeout("hitsniffer.createDiv()",1000);
      }
     }
    hs_idle = 1;
    hs_pingcount=50;
}
try{ if(nochat){};}catch(e){ nochat=0; }
try{ if(hs_pingcount){};}catch(e){ hs_pingcount=0; }

var hitsniffer = new _HSTracker();
var hs_idleTime = 0; 
var hs_idle = 0;
var hs_idles=0;
hitsniffer.init();
hitsniffer.logVisit();
_hsni_addListener(window, 'load', _hsni_trackAlinks);
_hsni_addListener(window, 'mousemove', _hsni_mnoIdle);
_hsni_addListener(window, 'keypress', _hsni_noIdle);
_hsni_addListener(window, 'scroll', _hsni_noIdle);

if (/*@cc_on!@*/false) {
    document.onfocusin = _hsni_noIdle;
} else {
    window.onfocus = _hsni_noIdle;
}

function hs_CheckInactivity() {
  hs_idleTime += 1;
  if(hs_idleTime > 40) {
    if (hs_idle==0){
     if (nochat==0) {
     setTimeout("hitsniffer.createDiv()",1000);
      }
     } 
    hs_idle = 1;
    hs_pingcount=50;
    }
}
setInterval("hs_CheckInactivity();", 1000);
HSTracked=1;
if (nochat==0) setTimeout("hitsniffer.createDiv()",1000);


}