Received: from CO1NAM05HT028.eop-nam05.prod.protection.outlook.com
 (2603:10b6:208:91::28) by MN2PR06MB6111.namprd06.prod.outlook.com with HTTPS
 via BL0PR05CA0018.NAMPRD05.PROD.OUTLOOK.COM; Tue, 30 Jun 2020 02:49:52 +0000
Received: from CO1NAM05FT008.eop-nam05.prod.protection.outlook.com
 (2a01:111:e400:7e50::51) by
 CO1NAM05HT028.eop-nam05.prod.protection.outlook.com (2a01:111:e400:7e50::218)
 with Microsoft SMTP Server (version=TLS1_2,
 cipher=TLS_ECDHE_RSA_WITH_AES_256_GCM_SHA384) id 15.20.3153.10; Tue, 30 Jun
 2020 02:49:51 +0000
Authentication-Results: spf=pass (sender IP is 107.181.187.94)
 smtp.mailfrom=pontorez.com; hotmail.com; dkim=pass (signature was verified)
 header.d=rkn.gov.ru;hotmail.com; dmarc=pass action=none
 header.from=rkn.gov.ru;compauth=pass reason=100
Received-SPF: Pass (protection.outlook.com: domain of pontorez.com designates
 107.181.187.94 as permitted sender) receiver=protection.outlook.com;
 client-ip=107.181.187.94; helo=smarthost.web-leader.net;
Received: from smarthost.web-leader.net (107.181.187.94) by
 CO1NAM05FT008.mail.protection.outlook.com (10.152.96.114) with Microsoft SMTP
 Server id 15.20.3153.10 via Frontend Transport; Tue, 30 Jun 2020 02:49:50
 +0000
X-IncomingTopHeaderMarker:
 OriginalChecksum:B67F5AB22BBF82CDE300A9CC7A487528506D3E86D292F67BA105CD53330AEDC5;UpperCasedChecksum:B0FE519AADED8470BAE9D121BEBDE1EE63400D38040047672D83CE639C895083;SizeAsReceived:4334;Count:27
Received: from ovh-cp1.echo-host.com (cp1.echo-host.com [198.27.106.192])
	by smarthost.web-leader.net (Postfix) with ESMTPS id 3C0EE81782
	for <pontorez@hotmail.com>; Tue, 30 Jun 2020 05:40:38 +0300 (MSK)
DKIM-Signature: v=1; a=rsa-sha256; q=dns/txt; c=relaxed/relaxed;
	d=pontorez.com; s=default; h=Date:Content-Type:MIME-Version:Subject:To:From:
	Sender:Reply-To:Message-ID:Cc:Content-Transfer-Encoding:Content-ID:
	Content-Description:Resent-Date:Resent-From:Resent-Sender:Resent-To:Resent-Cc
	:Resent-Message-ID:In-Reply-To:References:List-Id:List-Help:List-Unsubscribe:
	List-Subscribe:List-Post:List-Owner:List-Archive;
	bh=fgVSkWPIr0Nh03OrNy4uIfRATynudUsGTxuDLf+TM4c=; b=WSMxIQJbfJGNlLgi8TZ6HkgsL2
	okF2qViYgJoAWCb3klwZZyRXq6WtEwYafOwmChg3cRqqDuT714HHSlBBJLpQGSbC9PflY3buaHRJx
	qmVZBDIA8rz1p7/xXgIVGdZkI0kg9x0gZPLR0O5uN3jnGRiUz6oQrt9MHEyHAjD9O1H/rNbq488rR
	uiyXb48tG5eB+3uqKEZmWKWt6E2pIEWTeSC63w6jz8FGeOIHkBzgtPt61MAUc0bgsPDV5S5uONnMZ
	IYqSA84/LaKHxR7BGNbFT3Z75dFmL9FEOM8srfMpXDUS3+kSC6i6WSFguCDnqLys3CtIosw/YkdcH
	XBQZBfwQ==;
Received: from mx1.rkn.gov.ru ([87.226.213.147]:53798)
	by io.web-leader.net with esmtps (TLSv1.2:ECDHE-RSA-AES256-GCM-SHA384:256)
	(Exim 4.92)
	(envelope-from <zapret-info-out@rkn.gov.ru>)
	id 1jpvad-002Nch-P6
	for pontorez@pontorez.com; Mon, 29 Jun 2020 11:21:07 -0400
X-Client-Proxied-By: ROSKOMNADZOR Secured Mail Server
DKIM-Signature: v=1; a=rsa-sha256; c=relaxed/relaxed; d=rkn.gov.ru; s=dkim;
	t=1593444017; bh=fgVSkWPIr0Nh03OrNy4uIfRATynudUsGTxuDLf+TM4c=;
	h=From:To:Subject:Date;
	b=Dsh8nqmIVX7w22kka5nQBfBE6yxT4ccEW6zFXL2cUIpNhLxUa5SOYn69nZNX3tcpU
	 oRs5eBiLcsDT+xKEZ9tmHYcEGoR+5SkdHRWX8MW2Cl4EbJHNBiX3aLnTX1cLV7q+Xu
	 cPhRgdSOrOmUJmbjh8iZN38FEPvODg+0lbIGtv/A=
From: Роскомнадзор <zapret-info-out@rkn.gov.ru>
To: <pontorez@pontorez.com>, <pontorez@pm.me>, <abuse@ovh.ca>
Subject: [eais#1162250] Роскомнадзор информирует/the Roscomnadzor is informing
Content-Type: multipart/mixed; boundary="9b51d4eb6d2fa4d5526991f727ecd345"
Date: Mon, 29 Jun 2020 18:20:17 +0300 (MSK)

Направляется уведомление о внесении в «Единый реестр доменных имен, указателей страниц сайтов в сети «Интернет» и сетевых адресов, позволяющих идентифицировать сайты в сети «Интернет», содержащие информацию, распространение которой в Российской Федерации запрещено» следующего(их) указателя (указателей) страницы (страниц) сайта в сети «Интернет»: http://wvw.pontorez.com/timur.mutsuraev_inshallah-sady-nas-zhdut .

В случае непринятия провайдером хостинга и (или) владельцем сайта мер по удалению запрещенной информации и (или) ограничению доступа к сайту в сети «Интернет», будет принято решение о включении в единый реестр сетевого адреса, позволяющего идентифицировать сайт в сети «Интернет», содержащий информацию, распространение которой в Российской Федерации запрещено, а доступ к нему будет ограничен.

Сведения о включении доменных имен, указателей страниц сайтов сети «Интернет» и сетевых адресов доступны круглосуточно в сети «Интернет» по адресу http://eais.rkn.gov.ru .

С уважением,
ФЕДЕРАЛЬНАЯ СЛУЖБА ПО НАДЗОРУ В СФЕРЕ СВЯЗИ, ИНФОРМАЦИОННЫХ ТЕХНОЛОГИЙ И МАССОВЫХ КОММУНИКАЦИЙ.




It is notice of making an entry into the "Unified register of domain names, Internet web-site page links and network addresses enabling to identify the Internet web-sites containing the information prohibited for public distribution in the Russian Federation” the Internet web-site page (s) link (s): http://wvw.pontorez.com/timur.mutsuraev_inshallah-sady-nas-zhdut .

In case the hosting provider and (or) the Internet web-site owner fail to take these measures, the network address enabling to identify Internet web-sites containing the information prohibited for distribution in the Russian Federation will be decided to be entered into the Register and access will be limited.

The information about entering the domain names, Internet web-site page links and network addresses into the Register shall be available on a 24-hour basis at the following Internet address: http://eais.rkn.gov.ru/en/ .

Federal Service for Supervision in the Sphere of Telecom, Information Technologies and Mass Communications (ROSKOMNADZOR).