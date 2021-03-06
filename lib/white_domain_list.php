<?php
//white_domain_list
//白名单机制...，白名单是
//@date 2018年12月23日
//value=-1,代表失效本条规则，暂只支持单域名（针对引入外部白名单时的精确控制）,当处于strict_mode时，排除此key，单条关闭strict_mode
//value=0,代表仅加白单条域名
//value=1,代表其下级域名全部加白（例如3级域名，则其4级子域名全部加白）
//value=2,代表仅加白主域名及其子域名，即如果是主域名，加白全部，如果是子域名，加白命中的单条

return array(

    'cdn-thumb.fds.api.xiaomi.com' => 0,
    'bce.baidu.com' => 0,
    'b.bdstatic.com' => 0,
    'gss0.bdstatic.com' => 0, //百度贴吧头像
    'googleadapis.l.google.com' => 0, //解决google字体下载异常
    'gstaticadssl.l.google.com' => 0, //解决google字体下载异常
    'gvt2.com' => 1, //gvt2，安卓系统相关
    'wangbase.com' => 1, //阮一峰同志的博客图片显示
    'l.qq.com' => 0, //解决腾讯视频无法播放
    'dldir1.qq.com' => 0, //qq下载安装包路径
    'cgi.connect.qq.com' => 0, //qq互联
    'stdl.qq.com' => 0, //qq浏览器
    'wup.imtt.qq.com' => 0, //qq浏览器书签
    'pacaio.match.qq.com' => 0, //腾讯网qq登录
    'gia.jd.com' => 0, //京东滑动验证码
    'edge.yunjiasu.com' => 0, //百度云加速javascript快速加载功能
    'cd.bendibao.com' => 0, //成都本地宝
    'm.qpic.cn' => 0, // qq，微信，QQ空间等用到的静态资源域名
    'ipify.org' => 1, // 获得公网 IP
    'pass.1688.com' => 0, // 阿里巴巴网站访问不正常
    'cedexis.net' => 0, // windowsupdate CNAME
    'y0.cn' => 0, // 短网址服务，涉及本次丁香医生实时疫情页面 http://y0.cn/sari
    'click.taobao.com' => 0, //淘宝粉丝福利购
    't1.baidu.com' => 0, //百度图片自有平台
    't2.baidu.com' => 0, //百度图片自有平台
    't3.baidu.com' => 0, //百度图片自有平台
    't4.baidu.com' => 0, //百度图片自有平台
    't5.baidu.com' => 0, //百度图片自有平台
    't6.baidu.com' => 0, //百度图片自有平台
    't7.baidu.com' => 0, //百度图片自有平台
    't8.baidu.com' => 0, //百度图片自有平台
    't9.baidu.com' => 0, //百度图片自有平台
    't10.baidu.com' => 0, //百度图片自有平台
    't11.baidu.com' => 0, //百度图片自有平台
    't12.baidu.com' => 0, //百度图片自有平台
    'bytedance.com' => 0, //字节跳动
    'tbskip.taobao.com' => 1, //淘宝订单搜索相关
    'wl.jd.com' => 0, //修复京东pc首页加载异常
    'tanx.com' => 0, //饿了么店铺异常
    'promotion.aliyun.com' => 0, //阿里云控制台
    'rarbg.to' => 0, //BT站
    'rarbgprx.org' => 0, //BT站
    'rarbgmirror.org' => 0, //BT站
    'rarbgmirror.com' => 0, //BT站
    'rarbgmirrored.org' => 0, //BT站
    'rarbgaccess.org' => 0, //BT站
    'rarbgp2p.org' => 0, //BT站
    'rarbgproxied.org' => 0, //BT站
    'rarbgproxy.org' => 0, //BT站
    'rarbgto.org' => 0, //BT站
    'rarbgway.org' => 0, //BT站
    'rarbg2019.org' => 0, //BT站
    'rarbg2020.org' => 0, //BT站
    'rarbg2021.org' => 0, //BT站
    'gsp0.baidu.com' => 0, //百度贴吧相关
    'gsp1.baidu.com' => 0, //百度贴吧相关
    'gsp2.baidu.com' => 0, //百度贴吧相关
    'gsp3.baidu.com' => 0, //百度贴吧相关
    'sp0.baidu.com' => 0, //百度翻译资源
    'sp1.baidu.com' => 0, //百度翻译资源
    'sp2.baidu.com' => 0, //百度翻译资源
    'c0.ifengimg.com' => 0, //凤凰网视频异常
    '7moor.com' => 0, //山姆会员客服异常
    'v.smtcdns.net' => 0, //影响部分B站直播
    'gameone.com' => 0, //影响部分B站直播
    'ultraiso.net' => 1, //软碟通官网
    'mmstat.com' => 0, //修复优酷视频显示禁用了cookie
    'log.mmstat.com' => 0, //修复优酷视频显示禁用了cookie
    'adm.10jqka.com.cn' => 0, //修复同花顺的tips异常
    'cps.kaola.com' => 0, //考拉的cps，放行
    'iteye.com' => 0, //某编程网站
    'dl.360safe.com' => 0, //360驱动下载
    'resolver.msg.xiaomi.net' => 0, //小爱音箱语音识别
    'api.sec.miui.com' => 0, //miui自带骚扰拦截相关
    'iface2.iqiyi.com' => 0, //爱奇艺 相关视频推荐
    'apm3.music.163.com' => 0, //网易云音乐
    'mbd.baidu.com' => 0, //百度百家号
    'suo.im' => 0, //短网址服务
    'hinet.net' => 0,
    'hubpd.com' => 0, //党媒平台网址


    'herokuapp.com' => -1,
    'vidoza.net' => -1,
    'nahnoji.cz' => 1,
    'cloudfront.net' => -1,

    /**notracking 提议加白的一批域名 start**/
    'scribol.com' => 0,
    'tracking.epicgames.com' => 0,
    'logrocket.com' => 0,
    'loggly.com' => 0,
    'om.cbsi.com' => 0,
    'ipinfo.io' => 0,
    'v.shopify.com' => 0,
    'adobedtm.com' => 0,
    'c.evidon.com' => 0,
    'ereg.wip3.adobe.com' => 0,
    'csi.gstatic.com' => 0,
    'g.msn.com' => 0,
    'sascdn.com' => 0,
    'duckdns.org' => 0,
    'prf.hn' => 0,
    'placehold.it' => 0,
    'digg.com' => 0,
    'feedburner.com' => 0,
    'rambler.ru' => 1,
    'jiathis.com' => 0,
    'rs6.net' => 0,
    'com.com' => 0,
    's0.2mdn.net' => 0,
    'pr0gramm.com' => 0,
    'consent.cmp.oath.com' => 0,
    's.youtube.com' => 0,
    'purch.com' => 0,
    'fpdownload.macromedia.com' => 0,
    'dynatrace.com' => 0,
    'auditude.com' => 0,
    'app.link' => 0,
    /**notracking 提议加白的一批域名 end**/

    'activate.adobe.com' => 0,
    'ereg.adobe.com' => 0,
    'hlrcv.stage.adobe.com' => 0,
    'lmlicenses.wip4.adobe.com' => 0,
    'na1r.services.adobe.com' => 0,
    'licenses.adobe.com' => 1,
    'alcohol-soft.com' => 1,
    'licenses.ashampoo.com' => 0,
    'bluesoleil.com' => 1,
    'activation.phaseone.com' => 0,
    'corel.com' => 1,
    'dbregistration.cuteftp.com' => 0,
    'cyberlink.com' => 1,
    'activation.easeus.com' => 0,
    'upd.faronicslabs.com' => 0,
    'lumion3d.com' => 1,
    'lumion3d.net' => 1,
    'act2.mediafour.com' => 0,
    'sams.nikonimaging.com' => 0,
    'license.piriform.com' => 0,
    'www.bitsumactivationserver.com' => 0,
    'licensing.tableausoftware.com' => 0,
    'techsmith.com' => 1,
    'binaryage.com' => 1,
    'wisecleaner.com' => 1,


    'cpm.cm.kankan.com' => -1, //-1 失效本条规则，保持现状，即不加白本域名
    'deliver.ifeng.com' => -1, //保留的dead-hosts，为了缩减其子域名

);
