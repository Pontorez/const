Received: from PU1APC01HT143.eop-APC01.prod.protection.outlook.com
 (2603:10b6:208:236::23) by MN2PR06MB6111.namprd06.prod.outlook.com with HTTPS
 via MN2PR05CA0054.NAMPRD05.PROD.OUTLOOK.COM; Wed, 27 May 2020 12:41:56 +0000
Received: from PU1APC01FT051.eop-APC01.prod.protection.outlook.com
 (2a01:111:e400:7ebe::4e) by
 PU1APC01HT143.eop-APC01.prod.protection.outlook.com (2a01:111:e400:7ebe::205)
 with Microsoft SMTP Server (version=TLS1_2,
 cipher=TLS_ECDHE_RSA_WITH_AES_256_GCM_SHA384) id 15.20.3021.23; Wed, 27 May
 2020 12:41:54 +0000
Authentication-Results: spf=pass (sender IP is 107.181.187.94)
 smtp.mailfrom=pontorez.com; hotmail.com; dkim=pass (signature was verified)
 header.d=rkn.gov.ru;hotmail.com; dmarc=pass action=none
 header.from=rkn.gov.ru;compauth=pass reason=100
Received-SPF: Pass (protection.outlook.com: domain of pontorez.com designates
 107.181.187.94 as permitted sender) receiver=protection.outlook.com;
 client-ip=107.181.187.94; helo=smarthost.web-leader.net;
Received: from smarthost.web-leader.net (107.181.187.94) by
 PU1APC01FT051.mail.protection.outlook.com (10.152.253.146) with Microsoft
 SMTP Server id 15.20.3045.17 via Frontend Transport; Wed, 27 May 2020
 12:41:53 +0000
X-IncomingTopHeaderMarker:
 OriginalChecksum:540FB53068833116AE1F3288F9768848FC7E42B12064029D1C3C3774DE930B7D;UpperCasedChecksum:57D79088CD5FA2ABE9E76395A017FF40B75F8C1DF2D2F2C9A3E8B1433ADCF3B5;SizeAsReceived:4330;Count:27
Received: from ovh-cp1.echo-host.com (cp1.echo-host.com [198.27.106.192])
	by smarthost.web-leader.net (Postfix) with ESMTPS id 8037F816A1
	for <pontorez@hotmail.com>; Wed, 27 May 2020 15:41:51 +0300 (MSK)
DKIM-Signature: v=1; a=rsa-sha256; q=dns/txt; c=relaxed/relaxed;
	d=pontorez.com; s=default; h=Date:Content-Type:MIME-Version:Subject:To:From:
	Sender:Reply-To:Message-ID:Cc:Content-Transfer-Encoding:Content-ID:
	Content-Description:Resent-Date:Resent-From:Resent-Sender:Resent-To:Resent-Cc
	:Resent-Message-ID:In-Reply-To:References:List-Id:List-Help:List-Unsubscribe:
	List-Subscribe:List-Post:List-Owner:List-Archive;
	bh=oLhE9IN8bRWUNciA2kDDMMPNABXJpivXNQss/pgnNMs=; b=fzTjSEXl9YiX1kL0Q7OML0YT3m
	kD2Ky+pWXQZA4/0PhdlD3hL25mG9lmPPKWez3WAbBPnySHgiqd96oQFz1/VEkuhVSu/B+PbJzxxs2
	+aX5mxW8zIqcKsSoppaV5cWr8b/JbutprEB7rj9d/t7AGG9CV/Gokq5pAfjeq22Bw8+niJlMLVFkJ
	5mqm0oYFv7QN/Ax4GyqLbFeYCbqIYQqtlczS/eIpO3sSoIcuys3qOiIFFAWYkkYkvsyArvJ7OdBX9
	Tnj62JeEjwvMluxb8khPhOG3ZCZu8fGcF3/qmIyqa34Xcka+RghSVvMP60oXQSSGN20pitked3Xsm
	nRhrHRLQ==;
Received: from mx1.rkn.gov.ru ([87.226.213.147]:46162)
	by io.web-leader.net with esmtps (TLSv1.2:ECDHE-RSA-AES256-GCM-SHA384:256)
	(Exim 4.92)
	(envelope-from <zapret-info-out@rkn.gov.ru>)
	id 1jdvNO-00CHhh-EY
	for pontorez@pontorez.com; Wed, 27 May 2020 08:41:50 -0400
X-Client-Proxied-By: ROSKOMNADZOR Secured Mail Server
DKIM-Signature: v=1; a=rsa-sha256; c=relaxed/relaxed; d=rkn.gov.ru; s=dkim;
	t=1590583261; bh=oLhE9IN8bRWUNciA2kDDMMPNABXJpivXNQss/pgnNMs=;
	h=From:To:Subject:Date;
	b=k2hR2quQQSFFb9JuvUt1WKO1S3qA0QYBMUFpI7FFlk6jv58VaNn/aS/6XtQfunh9j
	 uD/XDctIzcOlYwMm3gJGFGCsYkv/f5jERyx26LzRmZ9d6iTwGr6olyb2PisYTLIpov
	 IKQj+JuLuHnaRO9M7hTuBuO2GCsurCQGMlH8M6A0=
From: Роскомнадзор <zapret-info-out@rkn.gov.ru>
To: <pontorez@pontorez.com>, <pontorez@pm.me>, <abuse@ovh.ca>
Subject: [eais#1088049] Роскомнадзор информирует/the Roscomnadzor is informing
Content-Type: multipart/mixed; boundary="76f634b61435eb6937fa502450c1fb93"
Date: Wed, 27 May 2020 15:41:00 +0300 (MSK)

Направляется уведомление о внесении в «Единый реестр доменных имен, указателей страниц сайтов в сети «Интернет» и сетевых адресов, позволяющих идентифицировать сайты в сети «Интернет», содержащие информацию, распространение которой в Российской Федерации запрещено» следующего(их) указателя (указателей) страницы (страниц) сайта в сети «Интернет»: http://www2.pontorez.com/finsky-podonok .

В случае непринятия провайдером хостинга и (или) владельцем сайта мер по удалению запрещенной информации и (или) ограничению доступа к сайту в сети «Интернет», будет принято решение о включении в единый реестр сетевого адреса, позволяющего идентифицировать сайт в сети «Интернет», содержащий информацию, распространение которой в Российской Федерации запрещено, а доступ к нему будет ограничен.

Сведения о включении доменных имен, указателей страниц сайтов сети «Интернет» и сетевых адресов доступны круглосуточно в сети «Интернет» по адресу http://eais.rkn.gov.ru .

С уважением,
ФЕДЕРАЛЬНАЯ СЛУЖБА ПО НАДЗОРУ В СФЕРЕ СВЯЗИ, ИНФОРМАЦИОННЫХ ТЕХНОЛОГИЙ И МАССОВЫХ КОММУНИКАЦИЙ.




It is notice of making an entry into the "Unified register of domain names, Internet web-site page links and network addresses enabling to identify the Internet web-sites containing the information prohibited for public distribution in the Russian Federation” the Internet web-site page (s) link (s): http://www2.pontorez.com/finsky-podonok .

In case the hosting provider and (or) the Internet web-site owner fail to take these measures, the network address enabling to identify Internet web-sites containing the information prohibited for distribution in the Russian Federation will be decided to be entered into the Register and access will be limited.

The information about entering the domain names, Internet web-site page links and network addresses into the Register shall be available on a 24-hour basis at the following Internet address: http://eais.rkn.gov.ru/en/ .

Federal Service for Supervision in the Sphere of Telecom, Information Technologies and Mass Communications (ROSKOMNADZOR).