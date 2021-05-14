Received: from HK2APC01HT234.eop-APC01.prod.protection.outlook.com
 (2603:10b6:208:15e::40) by MN2PR06MB6111.namprd06.prod.outlook.com with HTTPS
 via MN2PR17CA0027.NAMPRD17.PROD.OUTLOOK.COM; Wed, 27 May 2020 12:41:54 +0000
Received: from HK2APC01FT003.eop-APC01.prod.protection.outlook.com
 (2a01:111:e400:7ebc::49) by
 HK2APC01HT234.eop-APC01.prod.protection.outlook.com (2a01:111:e400:7ebc::454)
 with Microsoft SMTP Server (version=TLS1_2,
 cipher=TLS_ECDHE_RSA_WITH_AES_256_GCM_SHA384) id 15.20.3045.17; Wed, 27 May
 2020 12:41:53 +0000
Authentication-Results: spf=pass (sender IP is 107.181.187.94)
 smtp.mailfrom=pontorez.com; hotmail.com; dkim=pass (signature was verified)
 header.d=rkn.gov.ru;hotmail.com; dmarc=pass action=none
 header.from=rkn.gov.ru;compauth=pass reason=100
Received-SPF: Pass (protection.outlook.com: domain of pontorez.com designates
 107.181.187.94 as permitted sender) receiver=protection.outlook.com;
 client-ip=107.181.187.94; helo=smarthost.web-leader.net;
Received: from smarthost.web-leader.net (107.181.187.94) by
 HK2APC01FT003.mail.protection.outlook.com (10.152.248.173) with Microsoft
 SMTP Server id 15.20.3045.17 via Frontend Transport; Wed, 27 May 2020
 12:41:51 +0000
X-IncomingTopHeaderMarker:
 OriginalChecksum:6C835552ADD9EC41C79F9FB0AFD9753BFA23D9C0820B4D76B43C2047904A6F70;UpperCasedChecksum:B1537DC75F64B96243543390D6ED1875E77103FFFB029D90FDBA426CE9CC158D;SizeAsReceived:4671;Count:27
Received: from ovh-cp1.echo-host.com (cp1.echo-host.com [198.27.106.192])
	by smarthost.web-leader.net (Postfix) with ESMTPS id 968EA81772
	for <pontorez@hotmail.com>; Wed, 27 May 2020 15:41:49 +0300 (MSK)
DKIM-Signature: v=1; a=rsa-sha256; q=dns/txt; c=relaxed/relaxed;
	d=pontorez.com; s=default; h=Date:Content-Type:MIME-Version:Subject:To:From:
	Sender:Reply-To:Message-ID:Cc:Content-Transfer-Encoding:Content-ID:
	Content-Description:Resent-Date:Resent-From:Resent-Sender:Resent-To:Resent-Cc
	:Resent-Message-ID:In-Reply-To:References:List-Id:List-Help:List-Unsubscribe:
	List-Subscribe:List-Post:List-Owner:List-Archive;
	bh=gITjHwYF1OP/GnspZmkXdgAAgKlcowk7TkFpLYMjJek=; b=iBj27fFNAVomdN2zzvdx/Hr539
	ZGMDuRNkpXNYcLz4Osq9u9mjvoMwGg7YaI+DGt9o7c2+gX/jdR7rOnKJeiVBpnz9dy3pcO+OOl2eC
	+HH1mrHm03bwcgAlnALaIOTTox3YUczP5pYsgd6lcwAkvB0Hl6bXhe+WONMefz+EpzitXLaFK1WUU
	gkaILCuUrv/91BpVn7pNhdPW+B9PJgEH4se4b+0ZIuHA/btvyFVvz6S4LQ0QS0brPJrpTWZGwRyte
	VHa/avOa7CSRAiZgMryer+8uXE874a9neFGIQhYjZBQu++ke/B0zbgUQZiDHh02QUrqZyhHeWPYeK
	rKAV9LUQ==;
Received: from mx1.rkn.gov.ru ([87.226.213.147]:46118)
	by io.web-leader.net with esmtps (TLSv1.2:ECDHE-RSA-AES256-GCM-SHA384:256)
	(Exim 4.92)
	(envelope-from <zapret-info-out@rkn.gov.ru>)
	id 1jdvNN-00CHha-0B
	for pontorez@pontorez.com; Wed, 27 May 2020 08:41:48 -0400
X-Client-Proxied-By: ROSKOMNADZOR Secured Mail Server
DKIM-Signature: v=1; a=rsa-sha256; c=relaxed/relaxed; d=rkn.gov.ru; s=dkim;
	t=1590583259; bh=gITjHwYF1OP/GnspZmkXdgAAgKlcowk7TkFpLYMjJek=;
	h=From:To:Subject:Date;
	b=ow9gbu79gQRPpcB8XJFNq4zeWWkZP+q0Bp6/e8S4+uDVjgEnaw8mHsvgaXo8JpDh4
	 9ttsGIxIvpH2EHzdK5mO81Q7cWQa9uoC4LssaqqNVeXXr22Z9Lyblm8nFvj1FT6gNn
	 IBuuZZoG86UMcC0waQTq3l5o1PfJD6RjZ6isYfpA=
From: Роскомнадзор <zapret-info-out@rkn.gov.ru>
To: <pontorez@pontorez.com>, <pontorez@pm.me>, <abuse@ovh.ca>
Subject: [eais#1088024] Роскомнадзор информирует/the Roscomnadzor is informing
Content-Type: multipart/mixed; boundary="05b9364d5dff3579448dec0f226661a5"
Date: Wed, 27 May 2020 15:40:59 +0300 (MSK)

Направляется уведомление о внесении в «Единый реестр доменных имен, указателей страниц сайтов в сети «Интернет» и сетевых адресов, позволяющих идентифицировать сайты в сети «Интернет», содержащие информацию, распространение которой в Российской Федерации запрещено» следующего(их) указателя (указателей) страницы (страниц) сайта в сети «Интернет»: http://www2.pontorez.com/suicide-tourists .

В случае непринятия провайдером хостинга и (или) владельцем сайта мер по удалению запрещенной информации и (или) ограничению доступа к сайту в сети «Интернет», будет принято решение о включении в единый реестр сетевого адреса, позволяющего идентифицировать сайт в сети «Интернет», содержащий информацию, распространение которой в Российской Федерации запрещено, а доступ к нему будет ограничен.

Сведения о включении доменных имен, указателей страниц сайтов сети «Интернет» и сетевых адресов доступны круглосуточно в сети «Интернет» по адресу http://eais.rkn.gov.ru .

С уважением,
ФЕДЕРАЛЬНАЯ СЛУЖБА ПО НАДЗОРУ В СФЕРЕ СВЯЗИ, ИНФОРМАЦИОННЫХ ТЕХНОЛОГИЙ И МАССОВЫХ КОММУНИКАЦИЙ.




It is notice of making an entry into the "Unified register of domain names, Internet web-site page links and network addresses enabling to identify the Internet web-sites containing the information prohibited for public distribution in the Russian Federation” the Internet web-site page (s) link (s): http://www2.pontorez.com/suicide-tourists .

In case the hosting provider and (or) the Internet web-site owner fail to take these measures, the network address enabling to identify Internet web-sites containing the information prohibited for distribution in the Russian Federation will be decided to be entered into the Register and access will be limited.

The information about entering the domain names, Internet web-site page links and network addresses into the Register shall be available on a 24-hour basis at the following Internet address: http://eais.rkn.gov.ru/en/ .

Federal Service for Supervision in the Sphere of Telecom, Information Technologies and Mass Communications (ROSKOMNADZOR).