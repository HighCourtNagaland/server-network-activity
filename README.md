# CIS Server Network Activity

**Remote Interface to check server network status**

Requirements: 
- GNU wget, Internet Connectivity

[host machine] Use wget to send GET request to **link.php?check=true**

_link.php_ will generate _status.json_

[remote host] View _index.html_

Sample _status.json_

```
[
  {
    "date": "2023-06-31 11:50:40 AM",
    "ip": "164.100.151.246",
    "referer": "",
    "useragent": "Wget/1.17.1 (linux-gnu)"
  }
]

```
