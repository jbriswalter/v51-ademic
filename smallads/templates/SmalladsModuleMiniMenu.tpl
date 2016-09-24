
# IF C_VERTICAL #
    # START smallads_items #
        # IF smallads_items.C_SMALLADS_NO_AVAILABLE #
            <div class="center">
                {@mini.no.smallads}
            </div>
        # ELSE #
            <p>{@mini.there} {NB_SMALLADS} {@mini.smallads}</p>
            <h5>{@mini.last.smallads}</h5>
            <a href="{smallads_items.U_LINK}" title="{smallads_items.NAME}">
                # IF smallads_items.C_PICTURE #
                <img itemprop="thumbnailUrl" src="{smallads_items.U_PICTURE}" alt="{smallads_items.NAME}" />
                # ENDIF #
                <p>{smallads_items.NAME}</p>                
            </a>
            <a href="{PATH_TO_ROOT}/smallads" class="small" title="{@mini.view.all}">{@mini.view.all}</a>
           
        # ENDIF #
    # END smallads_items #
    
# ELSE #

    # START smallads_items #
        # IF smallads_items.C_SMALLADS_NO_AVAILABLE #
            <div class="center">
                {@mini.no.smallads}
            </div>
        # ELSE #
        <div class="module-mini-container">
            <div class="module-mini-top">
                <h5>{@mini.title}</h5>
            </div>
            <div class="module-mini-contents">
                <p>{@mini.there} {NB_SMALLADS} {@mini.smallads}</p>            
                <p>
                    <i>{@mini.last.smallads}</i> : 
                    <a href="{smallads_items.U_LINK}" title="{@mini.view.smallads}">
                        {smallads_items.NAME}
                    </a>
                </p>
            </div>
            <div class="module-mini-bottom center">
                <a href="{PATH_TO_ROOT}/smallads" title="{@mini.view.all}">{@mini.view.all}</a>
            </div>
        </div>
           
        # ENDIF #
    # END smallads_items #

# ENDIF #
