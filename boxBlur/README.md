<h2>Box Blur</h2>
<p>source: <a href="https://www.codesignal.com/">codesignal.com</a></p>
<div><p>Last night you partied a little too hard. Now there's a black and white photo of you that's about to go viral! You can't let this ruin your reputation, so you want to apply the <a href="https://en.wikipedia.org/wiki/Box_blur" target="_blank"><em>box blur</em> algorithm</a> to the photo to hide its content.</p>
<p>The pixels in the input image are represented as integers. The algorithm distorts the input image in the following way: Every pixel <code>x</code> in the output image has a value equal to the average value of the pixel values from the <code>3 × 3</code> square that has its center at <code>x</code>, including <code>x</code> itself. All the pixels on the border of <code>x</code> are then removed.</p>
<p>Return the blurred image as an integer, with the fractions rounded down.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<p>For</p>
<pre><code>image = [[1, 1, 1], 
         [1, 7, 1], 
         [1, 1, 1]]
</code></pre>
<p>the output should be <code>boxBlur(image) = [[1]]</code>.</p>
<p>To get the value of the middle pixel in the input <code>3 × 3</code> square: <code>(1 + 1 + 1 + 1 + 7 + 1 + 1 + 1 + 1) = 15 / 9 = 1.66666 = 1</code>. The border pixels are cropped from the final result.</p>
<p>For</p>
<pre><code>image = [[7, 4, 0, 1], 
         [5, 6, 2, 2], 
         [6, 10, 7, 8], 
         [1, 4, 2, 0]]
</code></pre>
<p>the output should be</p>
<pre><code>boxBlur(image) = [[5, 4], 
                  [4, 4]]
</code></pre>
<p>There are four <code>3 × 3</code> squares in the input image, so there should be four integers in the blurred output. To get the first value: <code>(7 + 4 + 0 + 5 + 6 + 2 + 6 + 10 + 7) = 47 / 9 = 5.2222 = 5</code>. The other three integers are obtained the same way, then the surrounding integers are cropped from the final result.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] array.array.integer image</strong></p>
<p>An image, stored as a rectangular matrix of non-negative integers.</p>
<p><em>Guaranteed constraints:</em><br>
<code>3 ≤ image.length ≤ 100</code>,<br>
<code>3 ≤ image[0].length ≤ 100</code>,<br>
<code>0 ≤ image[i][j] ≤ 255</code>.</p>
</li>
<li>
<p><strong>[output] array.array.integer</strong></p>
<ul>
<li>A blurred image represented as integers, obtained through the process in the description.</li>
</ul>
</li>
</ul>
</div>