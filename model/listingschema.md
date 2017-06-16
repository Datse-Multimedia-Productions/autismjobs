table joblistings:
- listingid: primary key
- jobtitle: text
- locationid: secondary key
- description: big text
- requirements: big text
- candidate: big text
- applypostal: secondary key locationid
- applyinperson: secondary key locaitonid
- applyonline: secondary key locationid
- companyid: secondary key

table jobtypes:
- othertypeid: primary key
- name: text
- descrition: big text

table listingtypes:
- joblistingtypeid: primary key
- listingid: secondary key
- typeid: secondary key

table locations:
- locationid: primary key
- name: text
- description: big text

table addresses:
- addressid: primary key
- formatted: big text
- cityid: secondary key

table cities:
- cityid: primary key
- name: text
- region: text
- province: text
- country: text

table locationsaddresses:
- locationaddress: primary key
- locationid: secondary key
- addressid: secondary key
- name: text

table emails:
- emailid: primary key
- name: text
- email: text

table locationsemails:
- locationemailid: primary key
- locationid: secondary key
- emailid: secondary key
- name: text

table websites:
- websiteid: primary key
- url: text
- name: text

table locationswebsites:
- locationwebsiteid: primary key
- locationid: primary key
- websiteid: primary key
- name: text

table companies:
- comapanyid: primary key
- name: text
- description: big text
- locationid: secondary key



