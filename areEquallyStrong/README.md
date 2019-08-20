<h2>Are Equally Strong</h2>
<p>source: <a href="https://www.codesignal.com/">codesignal.com</a>
<div class="markdown"><p>Call two arms <em>equally strong</em> if the heaviest weights they each are able to lift are equal.</p>
<p>Call two people <em>equally strong</em> if their strongest arms are equally strong (the strongest arm can be both the right and the left), and so are their weakest arms.</p>
<p>Given your and your friend's arms' lifting capabilities find out if you two are equally strong.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<ul>
<li>For <code>yourLeft = 10</code>, <code>yourRight = 15</code>, <code>friendsLeft = 15</code>, and <code>friendsRight = 10</code>, the output should be<br>
<code>areEquallyStrong(yourLeft, yourRight, friendsLeft, friendsRight) = true</code>;</li>
<li>For <code>yourLeft = 15</code>, <code>yourRight = 10</code>, <code>friendsLeft = 15</code>, and <code>friendsRight = 10</code>, the output should be<br>
<code>areEquallyStrong(yourLeft, yourRight, friendsLeft, friendsRight) = true</code>;</li>
<li>For <code>yourLeft = 15</code>, <code>yourRight = 10</code>, <code>friendsLeft = 15</code>, and <code>friendsRight = 9</code>, the output should be<br>
<code>areEquallyStrong(yourLeft, yourRight, friendsLeft, friendsRight) = false</code>.</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] integer yourLeft</strong></p>
<p>A non-negative integer representing the heaviest weight you can lift with your left arm.</p>
<p><em>Guaranteed constraints:</em><br>
<code>0 ≤ yourLeft ≤ 20</code>.</p>
</li>
<li>
<p><strong>[input] integer yourRight</strong></p>
<p>A non-negative integer representing the heaviest weight you can lift with your right arm.</p>
<p><em>Guaranteed constraints:</em><br>
<code>0 ≤ yourRight ≤ 20</code>.</p>
</li>
<li>
<p><strong>[input] integer friendsLeft</strong></p>
<p>A non-negative integer representing the heaviest weight your friend can lift with his or her left arm.</p>
<p><em>Guaranteed constraints:</em><br>
<code>0 ≤ friendsLeft ≤ 20</code>.</p>
</li>
<li>
<p><strong>[input] integer friendsRight</strong></p>
<p>A non-negative integer representing the heaviest weight your friend can lift with his or her right arm.</p>
<p><em>Guaranteed constraints:</em><br>
<code>0 ≤ friendsRight ≤ 20</code>.</p>
</li>
<li>
<p><strong>[output] boolean</strong></p>
<ul>
<li><code>true</code> if you and your friend are equally strong, <code>false</code> otherwise.</li>
</ul>
</li>
</ul>
</div>