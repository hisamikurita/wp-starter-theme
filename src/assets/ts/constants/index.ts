import gsap from "../libs/gsap";
import { CustomEase } from "gsap/CustomEase";
gsap.registerPlugin(CustomEase);

// ブレイクポイント
export const BREAKPOINT = 768 as const;
export const BESTVIEW = {
	x: 1280,
	y: 800,
} as const;

// 開発環境の判定
export const IS_TYPE_LOCAL = document.querySelector("body")?.dataset.type === "local" ? true : false;

// アニメーション時間
export const DURASION = {
	SHORT: 0.3,
	BASE: 0.4,
	FULL: 0.6,
	SCROLL: 1.0,
} as const;

// イージング
export const EASING = {
	TRANSFORM: CustomEase.create("transform", "M0,0 C0.44,0.05 0.17,1 1,1"),
	MATERIAL: CustomEase.create("material", "M0,0 C0.26,0.16 0.1,1 1,1"),
} as const;
