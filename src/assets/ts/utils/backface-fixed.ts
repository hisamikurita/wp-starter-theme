/**
 * @docs https://zenn.dev/tak_dcxi/articles/bbdb6cd9305ba4
 */

// ドキュメントの書字方向を取得し、縦書きかどうかを判定
const isVerticalWritingMode = () => {
	const writingMode = window.getComputedStyle(document.documentElement).writingMode;
	return writingMode.includes("vertical");
};

// スクロールバーの幅を計算する
const getScrollBarSize = () => {
	const scrollBarXSize = window.innerHeight - document.body.clientHeight;
	const scrollBarYSize = window.innerWidth - document.body.clientWidth;
	return isVerticalWritingMode() ? scrollBarXSize : scrollBarYSize;
};

// スクロール位置を取得する
const getScrollPosition = (fixed: boolean) => {
	if (fixed) {
		return isVerticalWritingMode() ? document.scrollingElement?.scrollLeft ?? 0 : document.scrollingElement?.scrollTop ?? 0;
	}
	return parseInt(document.body.style.insetBlockStart || "0", 10);
};

// 背面固定のスタイルを適用する
const applyStyles = (scrollPosition: number, apply: boolean) => {
	const styles = {
		blockSize: "100dvb",
		insetInlineStart: "0",
		position: "fixed",
		insetBlockStart: isVerticalWritingMode() ? `${scrollPosition}px` : `${scrollPosition * -1}px`,
		inlineSize: "100dvi",
	};
	Object.keys(styles).forEach((key) => {
		const styleKey = key as keyof typeof styles;
		document.body.style[styleKey] = apply ? styles[styleKey] : "";
	});
};

// スクロール位置を元に戻す
const restorePosition = (scrollPosition: number): void => {
	const options: ScrollToOptions = {
		behavior: "instant",
		[isVerticalWritingMode() ? "left" : "top"]: isVerticalWritingMode() ? scrollPosition : scrollPosition * -1,
	};
	window.scrollTo(options);
};

// 背面を固定する
export const backfaceFixed = (fixed: boolean): void => {
	const scrollBarWidth: number = getScrollBarSize();
	const scrollPosition: number = getScrollPosition(fixed);
	document.body.style.paddingInlineEnd = fixed ? `${scrollBarWidth}px` : "";
	applyStyles(scrollPosition, fixed);
	if (!fixed) {
		restorePosition(scrollPosition);
	}
};
