# 개요
Javascript 로 Adlib 용 뱅크파일 내용 보는 웹페이지 제작 프로젝트

# 기능
Adlib 카드를 이용하여 ROL, IMS 파일을 연주할때 사용되는 뱅크파일 BNK 의 구조를 분해하여 악기 목록과 선택한 악기에 정의된 내용을 확인함.

# Files
- *.BNK : 뱅크파일
- kssmcode.js : GetByte 모듈
- list.php : *.BNK 파일 목록을 추출하여 bnk.html 로 전달해주는 모듈
- bnk.html : BNK 파일 목록과 선택된 BNK의 구조, 악기 의 정의 내용 보는 웹페이지(Javascript 포함)

# 참조
AdLib Instrument Bank Format
https://moddingwiki.shikadi.net/wiki/AdLib_Instrument_Bank_Format
