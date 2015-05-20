说明
系统基于 ThinkPHP 和 ExtJS 开发。

Git 基础
可以下载 GitHub 客户端，这里重点提一下命令行开发

获取仓库代码

安装 Git，详情自己找到案
git clone https://github.com/fantengfei/12366.git
提交版本

git status
git add .
git commit -m "提交说明"
git pull --rebase
git push
以上步骤不能缺少

开发说明
根据地址 www.12366.ha.cn/Application/Home/Common/html/tree.html 打开 tree.html;
找到变量 treepanel ，在其中添加树节点，结构如:

{
text: "增值纳税申报表附列资料（一）",
leaf: true,
url: "__APP__/Home/TableNode1/table2"
};
依据 thinkPHP的 MVC 思想进行页面编写
