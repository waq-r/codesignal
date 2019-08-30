<h2>Digit Degree</h2>
source: <a href="https://www.codesignal.com/">www.codesignal.com</a>
<div class="markdown"><p>Let's define <em>digit degree</em> of some positive integer as the number of times we need to replace this number with the sum of its digits until we get to a one digit number.</p>
<p>Given an integer, find its digit degree.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<ul>
<li>For <code>n = 5</code>, the output should be<br>
<code>digitDegree(n) = 0</code>;</li>
<li>For <code>n = 100</code>, the output should be<br>
<code>digitDegree(n) = 1</code>.<br>
<code>1 + 0 + 0 = 1</code>.</li>
<li>For <code>n = 91</code>, the output should be<br>
<code>digitDegree(n) = 2</code>.<br>
<code>9 + 1 = 10</code> -&gt; <code>1 + 0 = 1</code>.</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] integer n</strong></p>
<p><em>Guaranteed constraints:</em><br>
<code>5 ≤ n ≤ 10<sup>9</sup></code>.</p>
</li>
<li>
<p><strong>[output] integer</strong></p>
</li>
</ul>
</div>