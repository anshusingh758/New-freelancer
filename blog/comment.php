<div id="comments" class="comments-area">
    <div id="respond" class="comment-respond">
        <h3 id="reply-title" class="comment-reply-title">Leave a Reply
            <small>
                <a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a>
            </small>
        </h3>
        <form action="comments-post.php" method="post" id="commentform" class="comment-form" novalidate="">
            <p class="comment-notes">
                <span id="email-notes">Your email address will not be published.</span> Required
                fields are marked <span class="required">*</span>
            </p>
            <p class="comment-form-comment">
                <label for="comment">Comment</label>
                <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525"
                    required="required"></textarea>
            </p>
            <p class="comment-form-author">
                <label for="author">Name <span class="required">*</span></label>
                <input id="author" name="author" type="text" value="" size="30" maxlength="245" required="required">
            </p>
            <p class="comment-form-email">
                <label for="email">Email <span class="required">*</span></label>
                <input id="email" name="email" type="email" value="" size="30" maxlength="100"
                    aria-describedby="email-notes" required="required">
            </p>
            <p class="comment-form-url">
                <label for="url">Website</label>
                <input id="url" name="url" type="url" value="" size="30" maxlength="200">
            </p>
            <p class="comment-form-cookies-consent">
                <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes">
                <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next
                    time I comment.</label>
            </p>
            <p class="form-submit">
                <input name="submit" type="submit" id="submit" class="submit" value="Post Comment">
                <input type="hidden" name="comment_post_ID" value="" id="comment_post_ID">
                <input type="hidden" name="comment_parent" id="comment_parent" value="">
            </p>
        </form>
    </div>
</div>