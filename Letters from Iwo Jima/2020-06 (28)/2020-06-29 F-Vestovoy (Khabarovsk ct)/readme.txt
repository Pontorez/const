Received: from HE1EUR04HT097.eop-eur04.prod.protection.outlook.com
 (2603:10b6:208:e8::25) by MN2PR06MB6111.namprd06.prod.outlook.com with HTTPS
 via MN2PR20CA0012.NAMPRD20.PROD.OUTLOOK.COM; Mon, 29 Jun 2020 04:02:43 +0000
Received: from HE1EUR04FT032.eop-eur04.prod.protection.outlook.com
 (2a01:111:e400:7e0d::4e) by
 HE1EUR04HT097.eop-eur04.prod.protection.outlook.com (2a01:111:e400:7e0d::351)
 with Microsoft SMTP Server (version=TLS1_2,
 cipher=TLS_ECDHE_RSA_WITH_AES_256_GCM_SHA384) id 15.20.3131.20; Mon, 29 Jun
 2020 04:02:41 +0000
Authentication-Results: spf=pass (sender IP is 107.181.187.94)
 smtp.mailfrom=pontorez.com; hotmail.com; dkim=pass (signature was verified)
 header.d=rkn.gov.ru;hotmail.com; dmarc=pass action=none
 header.from=rkn.gov.ru;compauth=pass reason=100
Received-SPF: Pass (protection.outlook.com: domain of pontorez.com designates
 107.181.187.94 as permitted sender) receiver=protection.outlook.com;
 client-ip=107.181.187.94; helo=smarthost.web-leader.net;
Received: from smarthost.web-leader.net (107.181.187.94) by
 HE1EUR04FT032.mail.protection.outlook.com (10.152.27.35) with Microsoft SMTP
 Server id 15.20.3131.20 via Frontend Transport; Mon, 29 Jun 2020 04:02:40
 +0000
X-IncomingTopHeaderMarker:
 OriginalChecksum:D5B2737D36CDBEFC451A8408C3DB64C9CD82CE5C5B310E39B06D7879E13EF220;UpperCasedChecksum:E1AB7FB3B863793FEC8C13CB9364EE86C133BAAE1D64B920A8C4E0CD3927B72B;SizeAsReceived:4332;Count:27
Received: from ovh-cp1.echo-host.com (cp1.echo-host.com [198.27.106.192])
	by smarthost.web-leader.net (Postfix) with ESMTPS id A4689818E6
	for <pontorez@hotmail.com>; Mon, 29 Jun 2020 06:58:15 +0300 (MSK)
DKIM-Signature: v=1; a=rsa-sha256; q=dns/txt; c=relaxed/relaxed;
	d=pontorez.com; s=default; h=Date:Content-Type:MIME-Version:Subject:To:From:
	Sender:Reply-To:Message-ID:Cc:Content-Transfer-Encoding:Content-ID:
	Content-Description:Resent-Date:Resent-From:Resent-Sender:Resent-To:Resent-Cc
	:Resent-Message-ID:In-Reply-To:References:List-Id:List-Help:List-Unsubscribe:
	List-Subscribe:List-Post:List-Owner:List-Archive;
	bh=67h7YWUK6wJNu76nV0jjFowZc1wH//dCXt07g0x6jTo=; b=eO4Hdk3xPJWZ7vEOgZWAOjbxR4
	e7qzkPBJ3o2cW9+byDxSWL+L0BsbzmtnFA0sm2DI/WpeyzYg/eeUXc7TTbY9RS4FlUtX2hjuJ0a6C
	FTFX7mkXftacfLfn2pb3Mt3rMqdBOQzRRZeCrS3+T/axyuK+hOzRpyfH1ZmLxLUGhVJQJmB6lv4II
	FGS53Vf4qThaWUkZeooZ3VoW1hDK+iSN0gdC4FZEeNATHtxGM29iTqRPmLIxIDtNYSCGt6eu4Sy8T
	Spw/VoUqCKEdTfL34m1cEzY+MaXxqIxFJ7N3YkGHn6b/19BFr7USbV+piMrI2RfoD47II7QxYnbw+
	ydMmC2rQ==;
Received: from mx1.rkn.gov.ru ([87.226.213.147]:48296)
	by io.web-leader.net with esmtps (TLSv1.2:ECDHE-RSA-AES256-GCM-SHA384:256)
	(Exim 4.92)
	(envelope-from <zapret-info-out@rkn.gov.ru>)
	id 1joqLA-0010mZ-DE
	for pontorez@pontorez.com; Fri, 26 Jun 2020 11:32:40 -0400
X-Client-Proxied-By: ROSKOMNADZOR Secured Mail Server
DKIM-Signature: v=1; a=rsa-sha256; c=relaxed/relaxed; d=rkn.gov.ru; s=dkim;
	t=1593185122; bh=67h7YWUK6wJNu76nV0jjFowZc1wH//dCXt07g0x6jTo=;
	h=From:To:Subject:Date;
	b=VgjCTQcXelMOK3DNw0GnUFYLV3rvL/3sK5+KN0DkDi+Aqy1ph40uqv5ENWs8em6cm
	 Wxrofvv146CZZX010/Z2RT6LptGKD3n3YDNF9QQPltbuLcYUcnvhH/17/gizPSzpn7
	 dKxp72I1cpM6cGJ8xz6tng8Cc/FVHg/K1T23vBUs=
From: Роскомнадзор <zapret-info-out@rkn.gov.ru>
To: <pontorez@pontorez.com>, <pontorez@pm.me>, <abuse@ovh.ca>
Subject: [eais#1161116] Роскомнадзор информирует/the Roscomnadzor is informing
Content-Type: multipart/mixed; boundary="77fdae31d11186c6829af90f6fd53228"
Date: Fri, 26 Jun 2020 18:25:22 +0300 (MSK)

Направляется уведомление о внесении в «Единый реестр доменных имен, указателей страниц сайтов в сети «Интернет» и сетевых адресов, позволяющих идентифицировать сайты в сети «Интернет», содержащие информацию, распространение которой в Российской Федерации запрещено» следующего(их) указателя (указателей) страницы (страниц) сайта в сети «Интернет»: http://wvw.pontorez.com/vestovoy .

В случае непринятия провайдером хостинга и (или) владельцем сайта мер по удалению запрещенной информации и (или) ограничению доступа к сайту в сети «Интернет», будет принято решение о включении в единый реестр сетевого адреса, позволяющего идентифицировать сайт в сети «Интернет», содержащий информацию, распространение которой в Российской Федерации запрещено, а доступ к нему будет ограничен.

Сведения о включении доменных имен, указателей страниц сайтов сети «Интернет» и сетевых адресов доступны круглосуточно в сети «Интернет» по адресу http://eais.rkn.gov.ru .

С уважением,
ФЕДЕРАЛЬНАЯ СЛУЖБА ПО НАДЗОРУ В СФЕРЕ СВЯЗИ, ИНФОРМАЦИОННЫХ ТЕХНОЛОГИЙ И МАССОВЫХ КОММУНИКАЦИЙ.




It is notice of making an entry into the "Unified register of domain names, Internet web-site page links and network addresses enabling to identify the Internet web-sites containing the information prohibited for public distribution in the Russian Federation” the Internet web-site page (s) link (s): http://wvw.pontorez.com/vestovoy .

In case the hosting provider and (or) the Internet web-site owner fail to take these measures, the network address enabling to identify Internet web-sites containing the information prohibited for distribution in the Russian Federation will be decided to be entered into the Register and access will be limited.

The information about entering the domain names, Internet web-site page links and network addresses into the Register shall be available on a 24-hour basis at the following Internet address: http://eais.rkn.gov.ru/en/ .

Federal Service for Supervision in the Sphere of Telecom, Information Technologies and Mass Communications (ROSKOMNADZOR).
