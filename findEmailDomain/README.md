<h2>Find Email Domain</h2>
<p>source: <a href="https://www.codesignal.com/">codesignal.com</a>
<div><p>An email address such as <code>"John.Smith@example.com"</code> is made up of a local part (<code>"John.Smith"</code>), an <code>"@"</code> symbol, then a domain part (<code>"example.com"</code>).</p>
<p>The domain name part of an email address may only consist of letters, digits, hyphens and dots. The local part, however, also allows a lot of different special characters. <a href="https://en.wikipedia.org/wiki/Email_address#Examples" target="_blank">Here</a> you can look at several examples of correct and incorrect email addresses.</p>
<p>Given a valid email address, find its domain part.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<ul>
<li>For <code>address = "prettyandsimple@example.com"</code>, the output should be<br>
<code>findEmailDomain(address) = "example.com"</code>;</li>
<li>For <code>address = "fully-qualified-domain@codesignal.com"</code>, the output should be<br>
<code>findEmailDomain(address) = "codesignal.com"</code>.</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] string address</strong></p>
<p><em>Guaranteed constraints:</em><br>
<code>10 ≤ address.length ≤ 50</code>.</p>
</li>
<li>
<p><strong>[output] string</strong></p>
</li>
</ul>
</div>