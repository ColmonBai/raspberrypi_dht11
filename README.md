# 树莓派DHT11温湿度监控系统V1.0
- 远程监控温湿度 并且将数据持久化到服务器 并且通过网站查看数据
# 硬件
- 树莓派
- DHT11温湿度模块
# 使用方法
- 将树莓派、电脑连接到同一局域网内
- DHT11模块DATA引脚连接到树莓派BCM针脚编码的18号针脚
- 将src/web/dh111文件拷贝至wamp的www目录下
- 运行WAMP服务器，新建数据库“dht11”，并且导入数据库文件，修改database.php文件中的数据库账号密码配置，在浏览器中访问127.0.0.1/dht11/index.php
- 修改src/python/main.py第5行的SERVER_URL中的ip地址为服务器的ip地址
- 使用FTP工具，将src/python/main.py下载到树莓派中
- 在树莓派终端运行行python test.py 终端打印此时的温湿度，同时发送到上位机数据库，并且在网页中显示
