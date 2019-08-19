<h2>IS IPv4 Address</h2>
<p>source: <a href="https://www.codesignal.com/">codesignal.com</a></p>
<div class="markdown"><p>An IP address is a numerical label assigned to each device (e.g., computer, printer) participating in a computer network that uses the Internet Protocol for communication. There are two versions of the Internet protocol, and thus two versions of addresses. One of them is the <a href="keyword://ipv4-address" target="_blank">IPv4 address</a>.</p>
<p>Given a string, find out if it satisfies the IPv4 address naming rules.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<ul>
<li>
<p>For <code>inputString = "172.16.254.1"</code>, the output should be<br>
<code>isIPv4Address(inputString) = true</code>;</p>
</li>
<li>
<p>For <code>inputString = "172.316.254.1"</code>, the output should be<br>
<code>isIPv4Address(inputString) = false</code>.</p>
<p><code>316</code> is not in range <code>[0, 255]</code>.</p>
</li>
<li>
<p>For <code>inputString = ".254.255.0"</code>, the output should be<br>
<code>isIPv4Address(inputString) = false</code>.</p>
<p>There is no first number.</p>
</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (php)</strong></p>
</li>
<li>
<p><strong>[input] string inputString</strong></p>
<p>A string consisting of digits, full stops and lowercase English letters.</p>
<p><em>Guaranteed constraints:</em><br>
<code>1 ≤ inputString.length ≤ 30</code>.</p>
</li>
<li>
<p><strong>[output] boolean</strong></p>
<ul>
<li><code>true</code> if <code>inputString</code> satisfies the IPv4 address naming rules, <code>false</code> otherwise.</li>
</ul>
</li>
</ul>
</div>
