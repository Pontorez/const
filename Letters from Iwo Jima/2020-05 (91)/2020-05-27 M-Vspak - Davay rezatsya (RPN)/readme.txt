Received: from PU1APC01HT213.eop-APC01.prod.protection.outlook.com
 (2603:10b6:208:25::41) by MN2PR06MB6111.namprd06.prod.outlook.com with HTTPS
 via BL0PR0102CA0064.PROD.EXCHANGELABS.COM; Wed, 27 May 2020 12:41:51 +0000
Received: from PU1APC01FT024.eop-APC01.prod.protection.outlook.com
 (2a01:111:e400:7ebe::44) by
 PU1APC01HT213.eop-APC01.prod.protection.outlook.com (2a01:111:e400:7ebe::428)
 with Microsoft SMTP Server (version=TLS1_2,
 cipher=TLS_ECDHE_RSA_WITH_AES_256_GCM_SHA384) id 15.20.3021.23; Wed, 27 May
 2020 12:41:50 +0000
Authentication-Results: spf=pass (sender IP is 107.181.187.94)
 smtp.mailfrom=pontorez.com; hotmail.com; dkim=pass (signature was verified)
 header.d=rkn.gov.ru;hotmail.com; dmarc=pass action=none
 header.from=rkn.gov.ru;compauth=pass reason=100
Received-SPF: Pass (protection.outlook.com: domain of pontorez.com designates
 107.181.187.94 as permitted sender) receiver=protection.outlook.com;
 client-ip=107.181.187.94; helo=smarthost.web-leader.net;
Received: from smarthost.web-leader.net (107.181.187.94) by
 PU1APC01FT024.mail.protection.outlook.com (10.152.252.233) with Microsoft
 SMTP Server id 15.20.3045.17 via Frontend Transport; Wed, 27 May 2020
 12:41:48 +0000
X-IncomingTopHeaderMarker:
 OriginalChecksum:CFE55089CCE6717B6D4F4C0CC2B6A1F5D57EF67C65F85B1890314D96D743E79A;UpperCasedChecksum:808BF2AD621CD0CE64F11473428CB17782F31825A5FF29ABF10CA728231879CF;SizeAsReceived:4671;Count:27
Received: from ovh-cp1.echo-host.com (cp1.echo-host.com [198.27.106.192])
	by smarthost.web-leader.net (Postfix) with ESMTPS id B29E8816A1
	for <pontorez@hotmail.com>; Wed, 27 May 2020 15:41:46 +0300 (MSK)
DKIM-Signature: v=1; a=rsa-sha256; q=dns/txt; c=relaxed/relaxed;
	d=pontorez.com; s=default; h=Date:Content-Type:MIME-Version:Subject:To:From:
	Sender:Reply-To:Message-ID:Cc:Content-Transfer-Encoding:Content-ID:
	Content-Description:Resent-Date:Resent-From:Resent-Sender:Resent-To:Resent-Cc
	:Resent-Message-ID:In-Reply-To:References:List-Id:List-Help:List-Unsubscribe:
	List-Subscribe:List-Post:List-Owner:List-Archive;
	bh=HhHR8URdC4exQnNMIktiFgFw35fxHY4i0WV0Ht9jS6A=; b=A8iWv1eY/feJ52X+vKqMtFT25K
	5Qf4T3vNZzkbWekDPh+Hjao3sGvk0qdtvsxNUPloc/q+mnTEfCKv9Z90YEZS8/Cx76E+wI0Y4avzo
	leQraYH4jokAI7oLvbyRO1BgUJM8JxqZzhcSgv/LT98+9uEL1Z2PKE1dOGTVDUA4iNuSVBbRnKiPT
	xVPMq67zc86ad58dRU/GY9/bRlCeoAL5zpyjL1QyZIJyHGvkNpFZiIMttvnSVQKMQtHJ3D0GZY0rk
	YqMTyr0sLCoK6uoRItA1ox0oPQSyJcHio+k+i5MxDp6SdJ1f25viaRIMTArDX6UbXTFREtmTa4VAW
	j0RJeX3Q==;
Received: from mx1.rkn.gov.ru ([87.226.213.147]:45988)
	by io.web-leader.net with esmtps (TLSv1.2:ECDHE-RSA-AES256-GCM-SHA384:256)
	(Exim 4.92)
	(envelope-from <zapret-info-out@rkn.gov.ru>)
	id 1jdvNJ-00CHgu-IP
	for pontorez@pontorez.com; Wed, 27 May 2020 08:41:45 -0400
X-Client-Proxied-By: ROSKOMNADZOR Secured Mail Server
DKIM-Signature: v=1; a=rsa-sha256; c=relaxed/relaxed; d=rkn.gov.ru; s=dkim;
	t=1590583256; bh=HhHR8URdC4exQnNMIktiFgFw35fxHY4i0WV0Ht9jS6A=;
	h=From:To:Subject:Date;
	b=JlnhVtqxauedQSbYoGGimcWLCDE2CLKsey9KwtqTr+LenGcy9zpzq+Ktm5dZrqMJk
	 h4o0Wy54WvQuDtuy2hXMg3LmesUruKEYBWrOlQ2BFN04dq2l5IWMZ1zXhxWe+xa2HJ
	 F9zvSoZpbSC6rspL+f4T3QnBwgzPAdKwB+QX94Fk=
From: Роскомнадзор <zapret-info-out@rkn.gov.ru>
To: <pontorez@pontorez.com>, <pontorez@pm.me>, <abuse@ovh.ca>
Subject: [eais#1087885] Роскомнадзор информирует/the Roscomnadzor is informing
Content-Type: multipart/mixed; boundary="441c79cff736bd8e931e6c5baec57de6"
Date: Wed, 27 May 2020 15:40:56 +0300 (MSK)

Направляется уведомление о внесении в «Единый реестр доменных имен, указателей страниц сайтов в сети «Интернет» и сетевых адресов, позволяющих идентифицировать сайты в сети «Интернет», содержащие информацию, распространение которой в Российской Федерации запрещено» следующего(их) указателя (указателей) страницы (страниц) сайта в сети «Интернет»: http://www2.pontorez.com/davai .

В случае непринятия провайдером хостинга и (или) владельцем сайта мер по удалению запрещенной информации и (или) ограничению доступа к сайту в сети «Интернет», будет принято решение о включении в единый реестр сетевого адреса, позволяющего идентифицировать сайт в сети «Интернет», содержащий информацию, распространение которой в Российской Федерации запрещено, а доступ к нему будет ограничен.

Сведения о включении доменных имен, указателей страниц сайтов сети «Интернет» и сетевых адресов доступны круглосуточно в сети «Интернет» по адресу http://eais.rkn.gov.ru .

С уважением,
ФЕДЕРАЛЬНАЯ СЛУЖБА ПО НАДЗОРУ В СФЕРЕ СВЯЗИ, ИНФОРМАЦИОННЫХ ТЕХНОЛОГИЙ И МАССОВЫХ КОММУНИКАЦИЙ.




It is notice of making an entry into the "Unified register of domain names, Internet web-site page links and network addresses enabling to identify the Internet web-sites containing the information prohibited for public distribution in the Russian Federation” the Internet web-site page (s) link (s): http://www2.pontorez.com/davai .

In case the hosting provider and (or) the Internet web-site owner fail to take these measures, the network address enabling to identify Internet web-sites containing the information prohibited for distribution in the Russian Federation will be decided to be entered into the Register and access will be limited.

The information about entering the domain names, Internet web-site page links and network addresses into the Register shall be available on a 24-hour basis at the following Internet address: http://eais.rkn.gov.ru/en/ .

Federal Service for Supervision in the Sphere of Telecom, Information Technologies and Mass Communications (ROSKOMNADZOR).