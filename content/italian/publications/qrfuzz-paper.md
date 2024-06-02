---
title: If You’re Scanning This, It’s Too Late! A QR Code-Based Fuzzing Methodology to Identify Input Vulnerabilities in Mobile Apps
referenceURL: https://link.springer.com/chapter/10.1007/978-3-031-41181-6_30
coverURL: /images/portfolio/qrfuzz.png
coauthors: [Prof. Mauro Conti, Denis Donadel, Federico Carboni]
tags: [unipd,paper,springer,qrcode,fuzzing,cybersecurity]
date: 2023-10-04
draft: false
---

Applied Cryptography and Network Security Workshops ([ACNS 2023](https://sulab-sever.u-aizu.ac.jp/ACNS2023/papers.html))

***Abstract***

*In recent years, QR (Quick Response) codes have gained popularity in facilitating information sharing with camera-equipped devices like smartphones and tablets. This technology is suitable for multiple applications, such as verification of COVID-19 vaccination, multi-factor authentication, or ease URL and contact sharing. Despite its huge adoption, security researchers have mainly focused on using QR codes as a vector for phishing attacks, exploiting the simplicity of hiding malicious URLs in a not human-readable format. However, this is just the tip of the iceberg of the potential QR codes have in being a suitable vector for cyberattacks.*

*In this paper, we design a fuzzing-based methodology to discover bugs and vulnerabilities in mobile applications receiving inputs from QR codes. Our framework is suitable for many different application categories, and it is highly flexible in handling various behavior of the apps before and after the scan takes place. We implemented our methodology in a toolkit, QRFuzz, which enables testing multiple codes in an automated way, looking for crashes, errors, and abnormal behaviors in applications. In our first experiment, we tested 20 popular Android apps with a dictionary of strings containing symbols, weird ASCII characters, and known malicious payloads. Our tests on about two thousand payloads showed that our tool correctly scanned almost all the given codes. During our first testing, we found a crash on a popular social application with over 1 billion downloads and on the official Italian COVID-19 vaccination verification app. To the best of our knowledge, this is the first framework enabling the fuzzing of applications via QR codes. We open-sourced QRFuzz so that other researchers can tackle the issue and developers can independently identify bugs.*