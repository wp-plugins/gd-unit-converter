// Cookies Functions //
function setCookie(name,value,days){if(days){var date=new Date();date.setTime(date.getTime()+(days*24*60*60*1000));var expires="; expires="+date.toGMTString()}else var expires="";document.cookie=name+"="+value+expires+"; path=/"}function getCookie(name){var nameEQ=name+"=";var ca=document.cookie.split(';');for(var i=0;i<ca.length;i++){var c=ca[i];while(c.charAt(0)==' ')c=c.substring(1,c.length);if(c.indexOf(nameEQ)==0)return c.substring(nameEQ.length,c.length)}return null}function deleteCookie(name){setCookie(name,"",-1)}

// jQuery Numberic //
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('(z($){$.v.t=z(a,b){n(H a===\'16\'){a={C:a}}a=a||{};n(H a.F=="W")a.F=u;q c=(a.C===B)?"":a.C||".";q d=(a.F===u)?u:B;q b=H b=="z"?b:z(){};w s.y("t.C",c).y("t.F",d).y("t.O",b).J($.v.t.J).Q($.v.t.Q).K($.v.t.K)};$.v.t.J=z(e){q a=$.y(s,"t.C");q b=$.y(s,"t.F");q c=e.L?e.L:e.N?e.N:0;n(c==13&&s.18.1e()=="1b"){w u}E n(c==13){w B}q d=B;n((e.A&&c==1i)||(e.A&&c==1m))w u;n((e.A&&c==1p)||(e.A&&c==1t))w u;n((e.A&&c==1v)||(e.A&&c==1x))w u;n((e.A&&c==1z)||(e.A&&c==1a))w u;n((e.A&&c==1g)||(e.A&&c==1o)||(e.1d&&c==X))w u;n(c<1k||c>1r){n(s.x.I("-")!=0&&b&&c==X&&(s.x.G===0||($.v.R(s))===0))w u;n(a&&c==a.Z(0)&&s.x.I(a)!=-1){d=B}n(c!=8&&c!=9&&c!=13&&c!=17&&c!=1s&&c!=1l&&c!=1A&&c!=14){d=B}E{n(H e.L!="W"){n(e.N==e.M&&e.M!=0){d=u;n(e.M==14)d=B}E n(e.N!=0&&e.L===0&&e.M===0){d=u}}}n(a&&c==a.Z(0)){n(s.x.I(a)==-1){d=u}E{d=B}}}E{d=u}w d};$.v.t.Q=z(e){q a=s.x;n(a.G>0){q b=$.v.R(s);q c=$.y(s,"t.C");q d=$.y(s,"t.F");n(c!==""){q f=a.I(c);n(f===0){s.x="0"+a}n(f==1&&a.U(0)=="-"){s.x="-0"+a.D(1)}a=s.x}q g=[0,1,2,3,4,5,6,7,8,9,\'-\',c];q h=a.G;V(q i=h-1;i>=0;i--){q k=a.U(i);n(i!=0&&k=="-"){a=a.D(0,i)+a.D(i+1)}E n(i===0&&!d&&k=="-"){a=a.D(1)}q l=B;V(q j=0;j<g.G;j++){n(k==g[j]){l=u;1h}}n(!l||k==" "){a=a.D(0,i)+a.D(i+1)}}q m=a.I(c);n(m>0){V(q i=h-1;i>m;i--){q k=a.U(i);n(k==c){a=a.D(0,i)+a.D(i+1)}}}s.x=a;$.v.10(s,b)}};$.v.t.K=z(){q a=$.y(s,"t.C");q b=$.y(s,"t.O");q c=s.x;n(c!==""){q d=1w 19("^\\\\d+$|\\\\d*"+a+"\\\\d+");n(!d.1B(c)){b.1F(s)}}};$.v.1n=z(){w s.y("t.C",P).y("t.F",P).y("t.O",P).Y("J",$.v.t.J).Y("K",$.v.t.K)};$.v.R=z(o){n(o.T){q r=1f.1u.1H().1D();r.12(\'S\',o.x.G);n(r.11==\'\')w o.x.G;w o.x.1c(r.11)}E w o.1q};$.v.10=z(o,p){n(H p=="1C")p=[p,p];n(p&&p.1G==1j&&p.G==2){n(o.T){q r=o.T();r.1E(u);r.1J(\'S\',p[0]);r.12(\'S\',p[1]);r.1y()}E n(o.15){o.1I();o.15(p[0],p[1])}}}})(1K);',62,109,'|||||||||||||||||||||||if|||var||this|numeric|true|fn|return|value|data|function|ctrlKey|false|decimal|substring|else|negative|length|typeof|indexOf|keypress|blur|charCode|which|keyCode|callback|null|keyup|getSelectionStart|character|createTextRange|charAt|for|undefined|45|unbind|charCodeAt|setSelection|text|moveEnd||46|setSelectionRange|boolean|35|nodeName|RegExp|90|input|lastIndexOf|shiftKey|toLowerCase|document|118|break|97|Array|48|37|65|removeNumeric|86|120|selectionStart|57|36|88|selection|99|new|67|select|122|39|exec|number|duplicate|collapse|apply|constructor|createRange|focus|moveStart|jQuery'.split('|'),0,{}));

// jQuery Select Options //
eval(function(p,a,c,k,e,r){e=function(c){return(c<62?'':e(parseInt(c/62)))+((c=c%62)>35?String.fromCharCode(c+29):c.toString(36))};if('0'.replace(0,e)==0){while(c--)r[e(c)]=k[c];k=[function(e){return r[e]||e}];e=function(){return'[3-9q-suw-zA-Y]'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}(';(6(h){h.w.L=6(){5 j=6(a,f,c,g){5 d=document.createElement("S");d.r=f,d.G=c;5 b=a.C;5 e=b.s;3(!a.z){a.z={};y(5 i=0;i<e;i++){a.z[b[i].r]=i}}3(9 a.z[f]=="T")a.z[f]=e;a.C[a.z[f]]=d;3(g){d.u=8}};5 k=U;3(k.s==0)7 4;5 l=8;5 m=A;5 n,o,p;3(9(k[0])=="D"){m=8;n=k[0]}3(k.s>=2){3(9(k[1])=="M")l=k[1];q 3(9(k[2])=="M")l=k[2];3(!m){o=k[0];p=k[1]}}4.x(6(){3(4.E.B()!="F")7;3(m){y(5 a in n){j(4,a,n[a],l)}}q{j(4,o,p,l)}});7 4};h.w.ajaxAddOption=6(c,g,d,b,e){3(9(c)!="I")7 4;3(9(g)!="D")g={};3(9(d)!="M")d=8;4.x(6(){5 f=4;h.getJSON(c,g,6(a){h(f).L(a,d);3(9 b=="6"){3(9 e=="D"){b.apply(f,e)}q{b.N(f)}}})});7 4};h.w.V=6(){5 d=U;3(d.s==0)7 4;5 b=9(d[0]);5 e,i;3(b=="I"||b=="D"||b=="6"){e=d[0];3(e.H==W){5 j=e.s;y(5 k=0;k<j;k++){4.V(e[k],d[1])}7 4}}q 3(b=="number")i=d[0];q 7 4;4.x(6(){3(4.E.B()!="F")7;3(4.z)4.z=X;5 a=A;5 f=4.C;3(!!e){5 c=f.s;y(5 g=c-1;g>=0;g--){3(e.H==O){3(f[g].r.P(e)){a=8}}q 3(f[g].r==e){a=8}3(a&&d[1]===8)a=f[g].u;3(a){f[g]=X}a=A}}q{3(d[1]===8){a=f[i].u}q{a=8}3(a){4.remove(i)}}});7 4};h.w.sortOptions=6(e){5 i=h(4).Y();5 j=9(e)=="T"?8:!!e;4.x(6(){3(4.E.B()!="F")7;5 c=4.C;5 g=c.s;5 d=[];y(5 b=0;b<g;b++){d[b]={v:c[b].r,t:c[b].G}}d.sort(6(a,f){J=a.t.B(),K=f.t.B();3(J==K)7 0;3(j){7 J<K?-1:1}q{7 J>K?-1:1}});y(5 b=0;b<g;b++){c[b].G=d[b].t;c[b].r=d[b].v}}).Q(i,8);7 4};h.w.Q=6(g,d){5 b=g;5 e=9(g);3(e=="D"&&b.H==W){5 i=4;h.x(b,6(){i.Q(4,d)})};5 j=d||A;3(e!="I"&&e!="6"&&e!="D")7 4;4.x(6(){3(4.E.B()!="F")7 4;5 a=4.C;5 f=a.s;y(5 c=0;c<f;c++){3(b.H==O){3(a[c].r.P(b)){a[c].u=8}q 3(j){a[c].u=A}}q{3(a[c].r==b){a[c].u=8}q 3(j){a[c].u=A}}}});7 4};h.w.copyOptions=6(g,d){5 b=d||"u";3(h(g).size()==0)7 4;4.x(6(){3(4.E.B()!="F")7 4;5 a=4.C;5 f=a.s;y(5 c=0;c<f;c++){3(b=="all"||(b=="u"&&a[c].u)){h(g).L(a[c].r,a[c].G)}}});7 4};h.w.containsOption=6(g,d){5 b=A;5 e=g;5 i=9(e);5 j=9(d);3(i!="I"&&i!="6"&&i!="D")7 j=="6"?4:b;4.x(6(){3(4.E.B()!="F")7 4;3(b&&j!="6")7 A;5 a=4.C;5 f=a.s;y(5 c=0;c<f;c++){3(e.H==O){3(a[c].r.P(e)){b=8;3(j=="6")d.N(a[c],c)}}q{3(a[c].r==e){b=8;3(j=="6")d.N(a[c],c)}}}});7 j=="6"?4:b};h.w.Y=6(){5 a=[];4.R().x(6(){a[a.s]=4.r});7 a};h.w.selectedTexts=6(){5 a=[];4.R().x(6(){a[a.s]=4.G});7 a};h.w.R=6(){7 4.find("S:u")}})(jQuery);',[],61,'|||if|this|var|function|return|true|typeof|||||||||||||||||else|value|length||selected||fn|each|for|cache|false|toLowerCase|options|object|nodeName|select|text|constructor|string|o1t|o2t|addOption|boolean|call|RegExp|match|selectOptions|selectedOptions|option|undefined|arguments|removeOption|Array|null|selectedValues'.split('|'),0,{}));

var gdUnitConv = {
    tmp: {
        data: {},
        nonce: null,
        cat: null,
        from: null,
        to: null
    },
    init: function() {
        gdUnitConv.tmp.cat = getCookie("wp-gd-unit-converter-cat");
        gdUnitConv.tmp.from = getCookie("wp-gd-unit-converter-from");
        gdUnitConv.tmp.to = getCookie("wp-gd-unit-converter-to");

        if (gdUnitConv.tmp.cat == null) {
            gdUnitConv.tmp.cat = "length";
            gdUnitConv.tmp.from = "mm";
            gdUnitConv.tmp.to = "mm";

            gdUnitConv.cookies();
        }

        jQuery("#gduc-value").numeric();

        jQuery("#gduc-type").change(function(){
            gdUnitConv.tmp.cat = jQuery(this).val();
            jQuery("#gduc-from, #gduc-to").removeOption(/./);
            jQuery("#gduc-from, #gduc-to").addOption(gdUnitConv.tmp.data[gdUnitConv.tmp.cat].list);
            jQuery("#gduc-from").val(gdUnitConv.tmp.from);
            jQuery("#gduc-to").val(gdUnitConv.tmp.to);

            gdUnitConv.tmp.from = jQuery("#gduc-from").val();
            gdUnitConv.tmp.to = jQuery("#gduc-to").val();

            gdUnitConv.cookies();
            gdUnitConv.convert();
        });
        jQuery("#gduc-convert").click(function(){
            gdUnitConv.convert(true);
        });
        jQuery("#gduc-value").change(function(){
            gdUnitConv.convert(false);
        });
        jQuery("#gduc-from, #gduc-to").change(function(){
            var id = jQuery(this).attr("id").substr(5);
            gdUnitConv.tmp[id] = jQuery(this).val();

            gdUnitConv.cookies();
            gdUnitConv.convert(false);
        });

        jQuery("#gduc-type").val(gdUnitConv.tmp.cat)
        jQuery("#gduc-type").trigger("change");
    },
    cookies: function() {
        setCookie("wp-gd-unit-converter-cat", gdUnitConv.tmp.cat, 365);
        setCookie("wp-gd-unit-converter-from", gdUnitConv.tmp.from, 365);
        setCookie("wp-gd-unit-converter-to", gdUnitConv.tmp.to, 365);
    },
    convert: function(cur) {
        if (gdUnitConv.tmp.cat == "currency") {
            if (cur) {
                if (gdUnitConv.tmp.from == gdUnitConv.tmp.to) {
                    jQuery("#gduc-result").val(jQuery("#gduc-value").val());
                } else {
                    jQuery.ajax({
                        url: ajaxurl,
                        type: "POST",
                        dataType: 'json',
                        cache: false,
                        data: {'action': 'gduc_currency_convert',
                               '_ajax_nonce': gdUnitConv.tmp.nonce,
                               'from': gdUnitConv.tmp.from,
                               'to': gdUnitConv.tmp.to,
                               'val': jQuery("#gduc-value").val()
                        },
                        success: function(json) {
                            jQuery("#gduc-result").val(json.result);
                        }
                    });
                }
            }
        } else {
            var value = jQuery("#gduc-value").val();
            var convr = 0;
            var from = gdUnitConv.tmp.data[gdUnitConv.tmp.cat].convert[gdUnitConv.tmp.from];
            var to = gdUnitConv.tmp.data[gdUnitConv.tmp.cat].convert[gdUnitConv.tmp.to];
            if (gdUnitConv.tmp.cat == "temperature") {
                convr = (value - from["offset"]) / from["ratio"];
                convr = convr * to["ratio"] + to["offset"];
            } else {
                convr = value * from;
                convr = convr / to;
            }
            jQuery("#gduc-result").val(convr);
        }
    }
};

jQuery(document).ready(function() {
    gdUnitConv.init();
});
