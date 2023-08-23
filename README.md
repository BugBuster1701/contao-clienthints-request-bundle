# Contao Client Hints Request Bundle

[![Latest Stable Version](https://poser.pugx.org/bugbuster/contao-clienthints-request-bundle/v/stable.svg)](https://packagist.org/packages/bugbuster/contao-clienthints-request-bundle) 
![Contao Version](https://img.shields.io/badge/Contao-4.13-orange)
![Contao Version](https://img.shields.io/badge/Contao-5.2-orange)
[![License](https://poser.pugx.org/bugbuster/contao-clienthints-request-bundle/license.svg)](https://packagist.org/packages/bugbuster/contao-clienthints-request-bundle)

## About

Requesting HTTP Client Hints via server-side header entry "Accept-CH: Sec-CH-UA...."

With the next request from the browser, the client hints are then sent in the header (more than without Client Hints request).<br>
Example:

| Key 	| Value	|
|---	|---	|
|sec-ch-ua          	    |""Chromium";v="116", "Not)A;Brand";v="24", "Google Chrome";v="116""
|sec-ch-ua-full-version	    |""116.0.5845.110""
|sec-ch-ua-mobile	        |"?0"
|sec-ch-ua-model	        |""""
|sec-ch-ua-platform	        |""Windows""
|sec-ch-ua-platform-version	|""13.0.0""

Hint: `sec-ch-ua-platform-version` values between 1.0.0 and 10.0.0 indicate Windows 10, 13.0.0 and above Windows 11.<br>
In Linux (`sec-ch-ua-platform: ""Linux""`), the `sec-ch-ua-platform-version` is the kernel version.

Currently, only the browsers Microsoft Edge, Google Chrome and Opera support this.

## Installation

Installation Guide (EN): [INSTALLATION_EN.md](INSTALLATION_EN.md)

Installationsanleitung (DE): [INSTALLATION_DE.md](INSTALLATION_DE.md)

