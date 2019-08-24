<h2>Deposit Profit</h2>
<p>source: <a href="https://www.codesignal.com/">codesignal.com</a>
<div class="markdown"><p>You have deposited a specific amount of money into your bank account. Each year your balance increases at the same growth <code>rate</code>. With the assumption that you don't make any additional deposits, find out how long it would take for your balance to pass a specific <code>threshold</code>.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<p>For <code>deposit = 100</code>, <code>rate = 20</code>, and <code>threshold = 170</code>, the output should be<br>
<code>depositProfit(deposit, rate, threshold) = 3</code>.</p>
<p>Each year the amount of money in your account increases by <code>20%</code>. So throughout the years, your balance would be:</p>
<ul>
<li>year 0: <code>100</code>;</li>
<li>year 1: <code>120</code>;</li>
<li>year 2: <code>144</code>;</li>
<li>year 3: <code>172.8</code>.</li>
</ul>
<p>Thus, it will take <code>3</code> years for your balance to pass the <code>threshold</code>, so the answer is <code>3</code>.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] integer deposit</strong></p>
<p>The initial deposit, guaranteed to be a positive integer.</p>
<p><em>Guaranteed constraints:</em><br>
<code>1 ≤ deposit ≤ 100</code>.</p>
</li>
<li>
<p><strong>[input] integer rate</strong></p>
<p>The rate of increase. Each year the balance increases by the <code>rate</code> <em>percent</em> of the current sum.</p>
<p><em>Guaranteed constraints:</em><br>
<code>1 ≤ rate ≤ 100</code>.</p>
</li>
<li>
<p><strong>[input] integer threshold</strong></p>
<p>The target balance.</p>
<p><em>Guaranteed constraints:</em><br>
<code>deposit &lt; threshold ≤ 200</code>.</p>
</li>
<li>
<p><strong>[output] integer</strong></p>
<ul>
<li>The number of years it would take to hit the <code>threshold</code>.</li>
</ul>
</li>
</ul>
</div>